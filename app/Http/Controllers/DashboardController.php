<?php

namespace App\Http\Controllers;

use App\Models\CampaignStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('start_date', Carbon::now()->subDays(7)->format('Y-m-d'));
        $endDate = $request->input('end_date', Carbon::now()->format('Y-m-d'));

        // Fetch campaign statistics for the last 7 days
        $statistics = CampaignStatistic::whereBetween('date', [$startDate, $endDate])
            ->whereHas('campaign', function ($query) {
                $query->where('user_id', Auth::id()); // Filter campaigns by logged-in user's ID
            })
            ->with('campaign') // Assuming you have a relationship defined
            ->get();

        //dd($reports);
        return view('admin.dashboard.index', compact('statistics', 'startDate', 'endDate'));
    }

    public function fetchreportsdata(Request $request)
    {
        $start_date = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('start_date'))->startOfDay();
        $end_date = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('end_date'))->endOfDay();

        $reports = CampaignStatistic::whereBetween('created_at', [$start_date, $end_date])
        ->whereHas('campaign', function ($query) {
            $query->where('user_id', Auth::id()); // Filter campaigns by logged-in user's ID
        })
        ->with('campaign') // Load related campaign data
        ->get();
        
        return response()->json(['data' => $reports]);
        
        //return view('admin.dashboard.index', compact('reports'));
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'bank_name' => 'required|string|max:255',
    //         'bank_logo_url' => 'required|image',
    //     ]);

    //     $data = $request->all();

    //     if ($request->hasFile('bank_logo_url')) {
    //         $data['bank_logo_url'] = $request->file('bank_logo_url')->store('bank_logos', 'public');
    //     }

    //     Bank::create($data);
    //     return redirect()->route('banks.index');
    // }

    // public function edit(Bank $bank)
    // {
    //     return view('admin.banks.edit', compact('bank'));
    // }

    // public function update(Request $request, Bank $bank)
    // {
    //     $request->validate([
    //         'bank_name' => 'required|string|max:255',
    //         'bank_logo_url' => 'sometimes|image',
    //     ]);

    //     $data = $request->all();

    //     if ($request->hasFile('bank_logo_url')) {
    //         $data['bank_logo_url'] = $request->file('bank_logo_url')->store('bank_logos', 'public');
    //     }

    //     $bank->update($data);
    //     return redirect()->route('banks.index');
    // }

    // public function destroy(Bank $bank)
    // {
    //     Storage::delete($bank->bank_logo_url);
    //     $bank->delete();
    //     return redirect()->route('banks.index');
    // }
}

