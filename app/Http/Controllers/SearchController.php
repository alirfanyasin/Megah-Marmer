<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        if ($q === '' || mb_strlen($q) < 2) {
            return response()->json([
                'data' => [],
                'message' => 'Minimal 2 karakter untuk pencarian'
            ]);
        }

        $results = collect();

        // 1) Locations
        try {
            $locations = Location::search($q, function ($algolia, $query, $options) {
                $options['attributesToRetrieve'] = ['id', 'name', 'address', 'phone'];
                $options['hitsPerPage'] = 3;
                return $algolia->search($query, $options);
            })->get();

            $locations->each(function ($item) use ($results) {
                $results->push([
                    'type'     => 'location',
                    'id'       => $item->id,
                    'name'     => $item->name,
                    'subtitle' => $item->address,
                    'icon'     => 'fa-map-marker-alt',
                    // our-locations kamu tidak menerima ID → pakai anchor ke section
                    'url'      => route('our-locations') . '#location-' . $item->id,
                ]);
            });
        } catch (\Exception $e) {
            Log::error('Location search error: ' . $e->getMessage());
        }

        // 2) Products
        try {
            $products = CategoryProduct::search($q, function ($algolia, $query, $options) {
                $options['attributesToRetrieve'] = ['id', 'name', 'price', 'discount', 'category_sub_id'];
                $options['hitsPerPage'] = 5;
                return $algolia->search($query, $options);
            })->get();

            $products->each(function ($item) use ($results) {
                // hitung harga setelah diskon
                $finalPrice = (float) $item->price;
                if ((float) $item->discount > 0) {
                    $finalPrice = $item->price - ($item->price * $item->discount / 100);
                }
                $priceLabel = 'Rp ' . number_format($finalPrice, 0, ',', '.');

                // ambil category_id via relasi CategorySub
                $categoryId = optional($item->categorySub)->category_id;
                $subId      = $item->category_sub_id;

                // fallback jika relasi belum di-load (supaya aman)
                if (!$categoryId && method_exists($item, 'categorySub')) {
                    $sub = $item->categorySub()->select('id', 'category_id')->first();
                    $categoryId = $sub?->category_id;
                }

                $url = '#';
                if ($categoryId && $subId) {
                    $url = route('category.products.detail', [
                        'id_category'     => $categoryId,
                        'id_sub_category' => $subId,
                        'id_product'      => $item->id,
                    ]);
                }

                $results->push([
                    'type'     => 'product',
                    'id'       => $item->id,
                    'name'     => $item->name,
                    'subtitle' => $priceLabel,
                    'icon'     => 'fa-box',
                    'url'      => $url,
                ]);
            });
        } catch (\Exception $e) {
            Log::error('Product search error: ' . $e->getMessage());
        }

        // 3) Categories
        try {
            $categories = Category::search($q, function ($algolia, $query, $options) {
                $options['attributesToRetrieve'] = ['id', 'name'];
                $options['hitsPerPage'] = 3;
                return $algolia->search($query, $options);
            })->get();

            $categories->each(function ($item) use ($results) {
                $url = route('category.sub', ['id_category' => $item->id]);
                $results->push([
                    'type'     => 'category',
                    'id'       => $item->id,
                    'name'     => $item->name,
                    'subtitle' => 'Category',
                    'icon'     => 'fa-tags',
                    'url'      => $url,
                ]);
            });
        } catch (\Exception $e) {
            Log::error('Category search error: ' . $e->getMessage());
        }

        return response()->json([
            'data'  => $results->take(10)->values(), // Max 10 hasil
            'total' => $results->count(),
        ]);
    }
}
