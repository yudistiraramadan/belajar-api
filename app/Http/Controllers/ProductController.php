<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        Product::create([
            'name' => $request->product_name,
            'price' => $request->price,
            'desc' => $request->desc
        ]);
        return response()->json([
            'message' => 'data berhasil ditambahkan'
        ]);
    }

    public function getData()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ]);
    }
}
