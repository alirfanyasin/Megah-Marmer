<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index($id_category, $id_sub_category)
    {
        $category = Category::find($id_category);
        $categorySub = CategorySub::find($id_sub_category);
        $products = CategoryProduct::where('category_sub_id', $id_sub_category)->get();
        return view('category-products', compact('category', 'categorySub', 'products'));
    }

    public function show($id_category, $id_sub_category, $id_product)
    {
        $category = Category::find($id_category);
        $categorySub = CategorySub::find($id_sub_category);
        $product = CategoryProduct::find($id_product);

        $recommendationProducts = CategoryProduct::inRandomOrder()->take(15)->get();

        $phoneNumber = PhoneNumber::first();


        return view('category-product-detail', compact('category', 'categorySub', 'product', 'recommendationProducts', 'phoneNumber'));
    }
}
