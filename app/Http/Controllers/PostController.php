<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
     //Create method
    public function create(Request $request)
    {
        /*
        $post = new Post();
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->save();
        */
        $validated = $request->validate([
            'body' => 'required',
            'user_id' => 'required',
        ]);

        $post= Post::create([
            'body' => $request->body,
            'user_id' => $request->user_id,
        ]);
        return response()->json([
            'data'=> $post,
            'message'=> "success"
        ], status:200);
    }



//Update method
public function update(Request $request, $id)
{
    Post::where('id', '=', $id)->update([
        'body' => $request->body
    ]);
}

//all Posts
public function index()
{
    return Post::all();
}

//show method
public function show(Request $request, $id)
{
    return Post::find($id);
}


//Delete method
public function delete( Request $request,$id)
{
    Post::where('id', '=', $id)->delete();
     return response()->json([
        'message'=> "success"
    ], status:204);
}

}
