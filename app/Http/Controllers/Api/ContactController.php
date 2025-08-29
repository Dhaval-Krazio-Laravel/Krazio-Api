<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $contact = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);

        Mail::to('admin@krazio.com')->send(new ContactMail($contact));

        return response()->json([
            'success' => true,
            'message' => 'Your message has been submitted successfully.',
            'data'    => ''
        ], 201);
    }
    
}
