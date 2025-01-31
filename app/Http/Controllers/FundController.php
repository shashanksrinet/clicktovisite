<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class FundController extends Controller
{
    public function showAddFundForm()
    {
        return view('admin.fund.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        //dd($api);
        // Create Razorpay order
        try {
            $order = $api->order->create([
                'receipt' => 'order_rcpt_' . time(),
                'amount' => $request->amount * 100, // amount in paise
                'currency' => 'INR',
            ]);
            //dd($order);
        } catch (\Razorpay\Api\Errors\BadRequestError $e) {
            //dd($e->getMessage());
            //\Log::error('Razorpay Error: ' . $e->getMessage());
            return back()->with('error', 'Payment failed: ' . $e->getMessage());
        }

        // Save fund request
        $fund = new Fund();
        $fund->user_id = Auth::id();
        $fund->amount = $request->amount;
        $fund->razorpay_payment_id = $order->id; // Store Razorpay order id
        $fund->status = 'pending';
        $fund->save();

        // Send order details to the front-end for payment
        return view('admin.fund.pay', [
            'order' => $order,
            'fund' => $fund,
        ]);
    }

    // Handle Razorpay payment callback
    public function handlePayment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        // Verify payment signature
        $attributes = [
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_signature' => $request->razorpay_signature,
        ];

        $fund = Fund::where('razorpay_payment_id', $request->razorpay_order_id)->first();

        try {
            $api->utility->verifyPaymentSignature($attributes);

            // Update the fund status to 'completed'
            $fund->status = 'completed';
            $fund->save();

            // Update user's balance
            $user = User::findOrFail(Auth::id());;
            $user->balance += $fund->amount;  // Assuming $fund->amount stores the added amount
            $user->save();

            return redirect()->route('fund.add')->with('success', 'Payment successful. Fund added.');
        } catch (\Exception $e) {
            // Update the fund status to 'failed'
            $fund->status = 'failed';
            $fund->save();

            return redirect()->route('fund.add')->with('error', 'Payment failed. Please try again.');
        }
    }

    public function fundHistory(Request $request)
    {
        // Get default start and end dates for the last 30 days
        $defaultStartDate = now()->subDays(30)->format('Y-m-d');
        $defaultEndDate = now()->format('Y-m-d');

        $userId = Auth::id();

        // Get start and end date from request or use default values
        $startDate = $request->start_date ?? $defaultStartDate;
        $endDate = $request->end_date ?? $defaultEndDate;

        $query = Fund::where('user_id', $userId);

        // Filter by date range
        $query->whereBetween('created_at', [
            $startDate . ' 00:00:00', 
            $endDate . ' 23:59:59'
        ]);

        // Filter by status if provided
        if ($request->status) {
            $query->where('status', $request->status);
        }

        $query->orderBy('created_at', 'desc');
        
        // Get filtered fund histories with pagination
        $fundHistories = $query->with('user')->paginate(100);

        // Pass data to the view including default dates
        return view('admin.fund.index', compact('fundHistories', 'startDate', 'endDate'));
    }

}
