<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display the footer content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Show the form for creating a new footer content.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created footer content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo_path' => 'required|image',
            'description' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'link_one' => 'required',
            'link_two' => 'required',
            // 'link_three' => 'required',
            // 'link_four' => 'required',
            // 'link_five' => 'required',
            // 'link_six' => 'required',
            // 'link_seven' => 'required',
            // 'link_eight' => 'required',
            // 'facebook' => 'required',
            // 'google' => 'required',
            // 'twitter' => 'required',
            // 'linkedin' => 'required',
        ]);

        $path = $request->file('logo_path')->store('footer_logo', 'public');

        Footer::create([
            'logo_path' => $path,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'link_one' => $request->link_one,
            'link_two' => $request->link_two,
            'link_three' => $request->link_three,
            'link_four' => $request->link_four,
            'link_five' => $request->link_five,
            'link_six' => $request->link_six,
            'link_seven' => $request->link_seven,
            'link_eight' => $request->link_eight,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);

        

        return redirect()->route('footer.index')->with('success', 'Footer created successfully.');
    }

    /**
     * Show the form for editing the specified footer content.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified footer content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            //'description' => $request->description,
            //'address' => $request->address,
            //'phone' => $request->phone,
            //'link_one' => $request->link_one,
            // 'link_two' => $request->link_two,
            // 'link_three' => $request->link_three,
            // 'link_four' => $request->link_four,
            // 'link_five' => $request->link_five,
            // 'link_six' => $request->link_six,
            // 'link_seven' => $request->link_seven,
            // 'link_eight' => $request->link_eight,
            // 'facebook' => $request->facebook,
            // 'google' => $request->google,
            // 'twitter' => $request->twitter,
            // 'linkedin' => $request->linkedin,
        ]);

        if ($request->hasFile('logo_path')) {
            $path = $request->file('logo_path')->store('footer_logo', 'public');
            $footer->logo_path = $path;
        }

        $footer->update($request->except('logo_path'));

        return redirect()->route('footer.index')->with('success', 'Footer updated successfully.');
    }
}

