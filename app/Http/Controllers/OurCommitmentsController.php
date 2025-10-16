<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCommitmentsController extends Controller
{
    public function index()
    {
        return view('about.our-commitments');
    }
}
