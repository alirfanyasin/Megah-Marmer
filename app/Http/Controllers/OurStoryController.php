<?php

namespace App\Http\Controllers;

use App\Models\OurStory;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    public function index()
    {
        $stories = OurStory::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();
        return view('about.our-story', compact('stories'));
    }
}
