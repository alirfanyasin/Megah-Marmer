<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SawingMachineController extends Controller
{
    public function index()
    {
        return view('about.sawing-machine');
    }
}
