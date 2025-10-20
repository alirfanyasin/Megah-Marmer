<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFinishingController extends Controller
{
    public function polish()
    {
        return view('our-finishing.polish');
    }

    public function doff_or_matte()
    {
        return view('our-finishing.doff-or-matte');
    }

    public function acid()
    {
        return view('our-finishing.acid');
    }

    public function hammered()
    {
        return view('our-finishing.hammered');
    }
    public function burning()
    {
        return view('our-finishing.burning');
    }
    public function texture()
    {
        return view('our-finishing.texture');
    }
    public function groove()
    {
        return view('our-finishing.groove');
    }
    public function stripe()
    {
        return view('our-finishing.stripe');
    }
    public function combination()
    {
        return view('our-finishing.combination');
    }
}
