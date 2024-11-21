<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactDashboardController extends Controller
{
    public function index()
    {
        // Fetch all contacts
        $contacts = Contact::all();

        // Pass contacts to the view
        return view('dashboard', compact('contacts'));
    }
}
