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
    public function create(Request $request)
    {
        return $request->validate([
            'title'=>'required|string|max:255',
            'body'=>'required|string',
            'features'=>'required|string',
            'price'=>'required|numeric',
            'rating'=>'numeric'
        ]);
    }
}
