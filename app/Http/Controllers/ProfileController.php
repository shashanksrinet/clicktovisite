<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        //$user = User::where('id', Auth::id());
        $user = User::findOrFail(Auth::id());
        //dd($user->email);
        // $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'country' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'address' => 'nullable|string|max:255',
        //     'phone' => 'required|string|max:15',
        //     'email' => 'required|email|unique:users,email,',
        //     'whatsapp' => 'nullable|string|max:15',
        // ]);

        // Update personal and contact information
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->phone = $request->phone;
        //$user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        try {
            $user->save();
            return redirect()->route('profile.show')->with('success', 'Profile information updated successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            //throw $th;
        }
        // Save the updated user
         // This should work if $user is a User model instance

        
    }

    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        //dd(Auth::id());
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|confirmed|string',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'The old password is incorrect']);
        }

        // Update the password
        
        
        // Save the updated user
        try {
            $user->password = Hash::make($request->password);
        } catch (\Exception $e) {
            dd($e->getMessage());
            //throw $th;
        }
        $user->save(); // This should work if $user is a User model instance

        return redirect()->route('profile.show')->with('success', 'Password updated successfully');
    }
}
