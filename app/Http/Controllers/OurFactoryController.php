<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFactoryController extends Controller
{
    public function index()
    {
        return view('about.our-factory');
    }
}
