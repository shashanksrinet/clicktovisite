<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.index', compact('aboutUs'));
    }
}
