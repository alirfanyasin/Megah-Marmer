<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use App\Models\HomeImage;
use App\Models\OurSelectionOrder;
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

        $homeImageData = HomeImage::first();
        $ourSelectionProducts = OurSelectionOrder::with(['categoryProduct.categorySub.category'])
            ->orderBy('order_number', 'asc')
            ->get();
        return view('index', compact('categories', 'recommendationProducts', 'categorySubDatas', 'newProducts', 'homeImageData', 'ourSelectionProducts'));
    }
}
