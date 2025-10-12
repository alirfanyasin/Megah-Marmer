<?php

namespace App\Http\Controllers;

use App\Models\CategorySub;
use Illuminate\Http\Request;

class CategorySubProductController extends Controller
{
    public function index($id_category)
    {
        $categorySub = CategorySub::with('category')->where('category_id', $id_category)->get();
        $category = $categorySub->first()?->category;
        return view('category-sub', compact('categorySub', 'category'));
    }
}
