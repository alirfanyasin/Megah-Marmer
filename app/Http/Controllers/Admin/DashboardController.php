<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
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
        $totalSubscriber = Subscribe::all()->count();

        $products = CategoryProduct::latest()->take(5)->get();
        $subscribers = Subscribe::latest()->take(5)->get();

        return view('app.dashboard', compact(
            'totalCategory',
            'totalLocation',
            'totalProduct',
            'totalSubscriber',
            'products',
            'subscribers',
        ));
    }
}
