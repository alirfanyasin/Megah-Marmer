<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs = ContactUs::orderBy("created_at", "desc")->get();
        return view("app.contact-us", compact("contactUs"));
    }

    public function destroy($id)
    {
        $contact = ContactUs::find($id);
        if (!$contact) {
            return back()->with('error', 'Contact message not found.');
        }

        $contact->delete();
        return back()->with('success', 'Contact message has been deleted.');
    }
}
