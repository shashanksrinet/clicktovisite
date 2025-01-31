<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter; // Assuming you have a model to store newsletter signups
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Newsletter::create(['email' => $request->email]);

        return response()->json(['success' => 'Thank you for signing up!']);
    }
}
