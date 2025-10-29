<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'name' => 'nullable|string|max:200',
            'email' => 'nullable|email|max:191',
            'phone_number' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        $computedName = trim(($validated['name'] ?? '') !== ''
            ? (string) $validated['name']
            : trim(($validated['first_name'] ?? '') . ' ' . ($validated['last_name'] ?? '')));

        if ($computedName === '') {
            return back()
                ->withErrors(['name' => 'Name is required.'])
                ->withInput();
        }

        ContactUs::create([
            'name' => $computedName,
            'email' => $validated['email'] ?? null,
            'phone_number' => $validated['phone_number'] ?? null,
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Your inquiry has been submitted successfully.');
    }
}
