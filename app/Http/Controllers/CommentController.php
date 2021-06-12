<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->body = $request->comment;

        $comment->user()->associate($request->user());

        $post = Post::find($request->post_id);

        $post->comments()->save($comment);
        $post->update(['comments'=>+1]);

        return back();
    }
    public function destroy($id)
    {
        $comment =Comment::find($id);
        $post = Post::find($comment->post_id);
        $post->update(['comments'=>-1]);
    
        $comment->delete();

        return back();


    }


}
