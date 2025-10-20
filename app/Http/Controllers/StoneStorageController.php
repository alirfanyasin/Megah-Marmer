<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoneStorageController extends Controller
{
    public function index()
    {
        return view('about.stone-storage');
    }
}
