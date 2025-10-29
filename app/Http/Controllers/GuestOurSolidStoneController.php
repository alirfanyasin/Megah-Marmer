<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestOurSolidStoneController extends Controller
{
    public function index()
    {
        return view("our-solid-stone");
    }
}
