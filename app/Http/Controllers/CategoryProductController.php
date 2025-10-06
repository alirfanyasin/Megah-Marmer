<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index($id)
    {
        return view('category-product-detail', ['categoryId' => $id]);
    }
}
