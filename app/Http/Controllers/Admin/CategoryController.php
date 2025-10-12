<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategorySub;

class CategoryController extends Controller
{
    public function index($id)
    {
        $data = Category::find($id);
        $dataSubMenu  = CategorySub::where('category_id', $id)->get();
        return view('app.category.index', [
            'data' => $data,
            'dataSubMenu' => $dataSubMenu,
        ]);
    }
}
