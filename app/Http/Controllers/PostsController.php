<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Support\Facades\DB;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Vote;
use Illuminate\Http\Request;



class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::all();
        return view('blog.blog_index', compact('channels'))
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get())
            ->with('Vposts', Post::orderBy('vote', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $channels = Channel::all();
        return view('blog.create', compact('channels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'channel' => 'required| not_in:0',

        ]);
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('blog.post', 'public');


        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('description'),
            'channel_id' => $request->input('channel'),
            "file_path" => $request->file->hashName(),
            'user_id' => auth()->user()->id,
            'vote' => 0

        ]);
        $channels=Channel::find($request->input('channel'));
        DB::update('update channels set postsNumber = ?+1 where id = ?', [$channels->postsNumber,$request->input('channel')]);

        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);


        return view('/blog/post')
            ->with('post', $post)
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get())
            ->with('Vposts', Post::orderBy('vote', 'DESC')->get());
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $channels = Channel::all();
        return view('/blog.edit', compact('channels'))
            ->with('post', Post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'channel' => 'required| not_in:0',

        ]);
        Post::find($id)
            ->update([
                'title' => $request->input('title'),
                'body' => $request->input('description'),
                'channel_id' => $request->input('channel'),
                'user_id' => auth()->user()->id

            ]);

        return redirect('blog')
            ->with('message', 'Your Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        $channels= Channel::all();
        DB::update('update channels set postsNumber = ?-1 where id = ?', [$channels->postsNumber,$post->channel_id]);


        return redirect('blog')
            ->with('message', 'Your Post has been Deleted');
    }
    public function upVote(Request $request, $id)
    {
        $post = Post::find($id);
        $user = $request->user();
        $user->upVote($post);
        $post->update(['vote'=>+1]);
        return back();

    }
    public function downVote(Request $request, $id)
    {
        $post = Post::find($id);
        $user = $request->user();
        $user->downVote($post);
        $post->update(['vote'=>-1]);
        return back();
    }
    public function getChannel($id){
        $channel = Channel::find($id);
        return view("blog/channels",compact('channel'))
        ->with('Votedposts', Post::orderBy('vote', 'ASC')->get())
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get())
        ->with('channels',Channel::all());

    }
    public static function commentCounterUp($id)
    {
        $post = Post::find($id);
        $post->update(['commentsNum'=>+1]);
    }
    public static function commentCounterDown($id)
    {
        $post = Post::find($id);
        $post->update(['commentsNum'=>-1]);
    }

}
