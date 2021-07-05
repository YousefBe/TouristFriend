<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
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

         DB::update('update posts set commentsNum = ?+1 where id = ?', [$post->commentsNum,$request->post_id]);

        return back();
    }
    public function destroy($id)
    {
        $comment =Comment::find($id);
        $post = Post::find($comment->post_id);

    
        $comment->delete();
        DB::update('update posts set commentsNum = ?-1 where id = ?', [$post->commentsNum,$comment->post_id]);

        return back();


    }


}
