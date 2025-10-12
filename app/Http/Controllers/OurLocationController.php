<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class OurLocationController extends Controller
{
    public function index()
    {
        $locationData = Location::all();
        return view('our-locations', compact('locationData'));
    }
}
