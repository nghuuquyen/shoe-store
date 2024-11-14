<?php

namespace App\Http\Controllers;

use App\Models\Product;

class NewArrivalsController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->when(request('search'), function ($query, $search) {
                return $query->where('name', 'like', "%$search%");
            })
            ->when(request('sort'), function ($query, $sort) {
                return match ($sort) {
                    'lowestprice' => $query->orderBy('price', 'asc'),
                    'highestprice' => $query->orderBy('price', 'desc'),
                    'newestfirst' => $query->orderBy('imported_date', 'desc'),
                    default => $query,
                };
            })
            ->get();

        return view('newarrivals', [
            'products' => $products,
        ]);
    }
}
