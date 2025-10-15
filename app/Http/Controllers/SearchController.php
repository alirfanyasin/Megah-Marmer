<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        if ($q === '') {
            return response()->json([]);
        }

        // Scout + Algolia
        $results = Location::search($q, function ($algolia, $query, $options) {
            // batasi field & jumlah result biar cepat
            $options['attributesToRetrieve'] = ['id', 'name', 'address', 'google_map'];
            $options['hitsPerPage'] = 8;
            return $algolia->search($query, $options);
        })->get();

        // Format ringkas untuk frontend
        $data = $results->map(function ($item) {
            return [
                'id'      => $item->id,
                'name'    => $item->name,
                'address' => $item->address,
                'url'     => route('our-locations', $item->id ?? 0),
            ];
        });

        return response()->json($data);
    }
}
