<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestOurSolidStoneController extends Controller
{
    public function index()
    {
        return view("our-solid-stone");
    }

    public function marble()
    {
        return view("oss-marble");
    }

    public function onyx()
    {
        return view("oss-onyx");
    }

    public function terazzo()
    {
        return view("oss-terazzo");
    }
}
