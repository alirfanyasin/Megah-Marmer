<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use App\Models\ContactUs;
use App\Models\Location;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategory = CategorySub::all()->count();
        $totalLocation = Location::all()->count();
        $totalProduct = CategoryProduct::all()->count();
        $totalMessage = ContactUs::all()->count();

        $products = CategoryProduct::latest()->take(5)->get();
        $totalMessages = ContactUs::latest()->take(5)->get();

        return view('app.dashboard', compact(
            'totalCategory',
            'totalLocation',
            'totalProduct',
            'totalMessage',
            'products',
            'totalMessages',
        ));
    }
}
