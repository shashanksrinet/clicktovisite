<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('admin.contact.index');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // For example, using Mail::to() to send an email
        // Mail::to('admin@example.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function showContactFormWithoutLoggedInUser()
    {
        return view('contact');
    }

    public function submitContactFormWithoutLoggedInUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // For example, using Mail::to() to send an email
        // Mail::to('admin@example.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    
}
