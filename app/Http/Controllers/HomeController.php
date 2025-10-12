<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $recommendationProducts = CategoryProduct::with(['category', 'categorySub'])
            ->inRandomOrder()->take(15)->get();

        $categorySubDatas = CategorySub::all();

        $newProducts = CategoryProduct::latest()->get();
        return view('index', compact('categories', 'recommendationProducts', 'categorySubDatas', 'newProducts'));
    }
}
