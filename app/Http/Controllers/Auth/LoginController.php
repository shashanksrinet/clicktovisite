<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Constructor to apply guest middleware to ensure only unauthenticated users access login
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login requests
    public function login(Request $request)
    {
        // Validate the request
        $this->validateLogin($request);

        // Attempt to login with the provided credentials
        if (Auth::attempt($this->credentials($request))) {
            // If successful, redirect to intended page (default: /dashboard)
            return redirect()->intended('/dashboard'); // Change to your intended route
        }

        // If login fails, send a failed login response
        return $this->sendFailedLoginResponse($request);
    }

    // Logout the user
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    // Validate the login form
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    // Get the credentials from the login request
    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    // Handle a failed login attempt
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => [__('auth.failed')],
        ]);
    }
}
