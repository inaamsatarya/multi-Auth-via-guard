<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    //Create method
    public function create(CreateCommentRequest $request) //Request   CreateCommentRequest
    {
        /*$validated = $request->validate([
            'body' => 'required',
            'user_id' => 'required',
            'post_id' => 'required',
        ]);*/

        $comment= Comment::create([
            'body' => $request->body,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id
        ]);
        return response()->json([
            'data'=> $comment,
            'message'=> "success"
        ], status:200);
    }

 //Update method
public function update(Request $request, $id)
{
    Comment::where('id', '=', $id)->update([
        'body' => $request->body
    ]);
}

 //all comments
public function index()
{
    return Comment::all();
}

//show method
public function show(Request $request, $id)
{
    return Comment::find($id);
}


//Delete method
public function delete( Request $request,$id)
{
     Comment::where('id', '=', $id)->delete();
     return response()->json([
        'message'=> "success"
    ], status:204);
}


}
