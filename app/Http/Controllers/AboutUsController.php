<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view("about-us");
    }

    public function ourPackaging()
    {
        return view("our-packaging-page");
    }
}
