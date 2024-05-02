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
        $user=(new LoginController())->checkauth($request);
        $task = new Task();
        $task -> fill(
            $request->validate([
                'title'=>'required|string|max:255',
                'body'=>'required|string',
                'reward'=>'required|numeric',


            ]));
        $task -> owner_id = $user['id'];
        $task -> views = 0;
        $task -> status = "open";

        $task -> fill(['rating'=>'0']);
        $task -> save();
        ;
        return response()->json([
            'status' => true,
            'message' => "Task Created successfully!",
            'product' => $task
        ], 200);
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
