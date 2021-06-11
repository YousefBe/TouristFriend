<?php

namespace App\Http\Controllers;

use App\Models\Channel;
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
        return view('blog', compact('channels'))
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
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
            ->with('post', $post);
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

        return redirect('blog')
            ->with('message', 'Your Post has been Deleted');
    }
    public function upVote(Request $request, $id)
    {
        $post = Post::find($id);
        $user = $request->user();
        $user->upVote($post);
        return back();

    }
    public function downVote(Request $request, $id)
    {
        $post = Post::find($id);
        $user = $request->user();
        $user->downVote($post);
        return back();

    }
}
