<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\CategorySub;
use App\Models\EmailOrder;
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

        // $phoneNumber = PhoneNumber::first();
        $emailOrder = EmailOrder::first();



        return view('category-product-detail', compact('category', 'categorySub', 'product', 'recommendationProducts', 'emailOrder'));
    }


    public function allProducts(Request $request)
    {
        $search = $request->input('search');

        $query = CategoryProduct::query()
            ->with(['categorySub.category'])
            ->orderByDesc('id');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    // cari berdasarkan nama subkategori
                    ->orWhereHas('categorySub', function ($sub) use ($search) {
                        $sub->where('name', 'like', "%{$search}%");
                    })
                    // cari berdasarkan nama kategori utama
                    ->orWhereHas('categorySub.category', function ($cat) use ($search) {
                        $cat->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $allProducts = $query->paginate(12)->withQueryString();

        return view('products-all', compact('allProducts', 'search'));
    }
}
