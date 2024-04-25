<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
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
        $title = "%";
        $title .= $request->get("title");
        $title .= "%";
        $rating = "%";
        $products = [];
        $rating .= $request->get("rating");
        $raw_tags = $request->get("tags");
        if($raw_tags == null){
            $tags_from_request[]="%";
        }
        else{
        $tags_from_request = explode(",",$raw_tags);
        }
                $tags=  Tag::where("tag","like",$tags_from_request)->get();

        foreach ($tags as $tag){
             $tagproducts = $tag->belongsToMany(Product::class)->where("title","like",$title)->where("rating","like",$rating)->get();

             foreach ($tagproducts as $tagproduct){
                 $products[] = $tagproduct;
             }
        }


        return $tags;


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
