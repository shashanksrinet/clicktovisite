<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutus()
    {
        return view('about');
    }

    public function adformat()
    {
        return view('adformat');
    }

    public function faq()
    {
        return view('faq');
    }

    public function cookiesPolicy()
    {
        return view('cookies');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacyPolicy()
    {
        return view('privacy');
    }

    public function refundPolicy()
    {
        return view('refund');
    }

    public function pricingPlan()
    {
        return view('pricingplan');
    }

    public function userList(Request $request)
    {
        $search = $request->input('search');

        $query = User::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%");
        }

        $users = $query->paginate(15); // 10 per page

        return view('userlist', compact('users', 'search'));
    }
}
