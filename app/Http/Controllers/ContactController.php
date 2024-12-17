<?php

namespace App\Http\Controllers;

use App\Events\ContactCreated;
use App\Jobs\SendContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Dispatch a job to send email
        SendContactEmail::dispatch($contact);

        // Fire real-time event
        Event::dispatch(new ContactCreated($contact));

        return back()->with('success', 'Contact submitted successfully!');
    }
}
