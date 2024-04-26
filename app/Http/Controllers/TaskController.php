<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function search(Request $request)
    {
        $requests = [];

        $title = "%";
        $title .= $request->get("title");
        $title .= "%";

        $minreward = $request->get("minreward");
        if($minreward == null){
            $minreward="0";
        }
        $maxreward = $request->get("maxreward");
        if($maxreward == null){
            $maxreward= Task::get()->sortByDesc('reward')->first();
            $maxreward = $maxreward["reward"];

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
            $tagrequests = $tag->belongsToMany(Task::class)->where("title","like",$title)->whereBetween('reward', [$minreward, $maxreward])->get();

            foreach ($tagrequests as $tagrequest){
                $requests[] = $tagrequest;
            }
        }


        return $requests;


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Task::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Task::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
