<?php

namespace App\Http\Controllers;

use App\Models\Product;

class NewArrivalsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('newarrivals', [
            'products' => $products,
        ]);
    }
}
