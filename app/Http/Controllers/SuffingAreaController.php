<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuffingAreaController extends Controller
{
    public function index()
    {
        return view('about.suffing-area');
    }
}
