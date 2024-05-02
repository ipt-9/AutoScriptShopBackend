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
        $product =Product::find($id);

        foreach ($product->pictures as $picture){

        }

        return  $product;


    }
    public function search(Request $request)
    {
        $products = [];

        $title = "%";
        $title .= $request->get("title");
        $title .= "%";

        $minprice = $request->get("minprice");
        if($minprice == null){
            $minprice="0";
        }
        $maxprice = $request->get("maxprice");
        if($maxprice == null){
            $maxprice= Product::get()->sortByDesc('price')->first();
            $maxprice = $maxprice["price"];

        }

        $minrating = $request->get("minrating");
        if($minrating == null){
            $minrating="0";
        }
        $maxrating = $request->get("maxrating");
        if($maxrating == null){
            $maxrating="10";
        }


        $raw_tags = $request->get("tags");
        if($raw_tags == null){
            $tags_from_request[]="%";
        }
        else{
        $tags_from_request = explode(",",$raw_tags);
        }
                $tags=  Tag::where("tag","like",$tags_from_request)->get();

        foreach ($tags as $tag){
             $tagproducts = $tag->belongsToMany(Product::class)->where("title","like",$title)->whereBetween("rating",[$minrating,$maxrating])->whereBetween('price', [$minprice, $maxprice])->get();

             foreach ($tagproducts as $tagproduct){
                 $pictures=[];
                 foreach ($tagproduct->pictures as $picture){

                     $pictures[] = $picture;
                 }

                 $products[] = $tagproduct;
             }
        }


        return $products;


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
