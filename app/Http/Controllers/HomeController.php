<?php

namespace App\Http\Controllers;

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

    
}
