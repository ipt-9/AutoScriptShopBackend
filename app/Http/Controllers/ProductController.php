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
    public function search(Request $request)
    {
        return Product::search($request->search)->get();
    }
}
