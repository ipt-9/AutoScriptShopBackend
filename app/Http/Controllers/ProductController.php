<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function findById(int $id)
    {
        return Product::find($id);
    }
    public function search(string $request)
    {
        return Product::search($request)->get();
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product -> fill($request->validate([
            'user_id'=>'required',
            'title'=>'required|string|max:255',
            'body'=>'required|string',
            'features'=>'required|string',
            'price'=>'required|numeric',
            'rating'=>'numeric',
            'script'=>'required',
        ]));
        $product -> fill(['rating'=>'0']);
        $product->save();
            ;
        return response()->json([
            'status' => true,
            'message' => "Product Created successfully!",
            'product' => $product
        ], 200);

    }
}
