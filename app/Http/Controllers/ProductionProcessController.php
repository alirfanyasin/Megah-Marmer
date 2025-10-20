<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionProcessController extends Controller
{
    public function index()
    {
        return view('about.production-process');
    }
}
