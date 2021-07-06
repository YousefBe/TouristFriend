@extends('layouts.blog')
@section('content')
    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>

                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li>{{ $post->title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset('storage/blog.post/' . $post->file_path) }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="#">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                                                datetime="2020-01-01">{{ date('jS M Y h: i A', strtotime($post->updated_at)) }}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12
                                            Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $post->body }} </p>


                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">{{ $post->channel->name }}</a></li>
                                </ul> <br><br>

                                <!-- vote settings -->
                                <div class="inline-flex" style="display:inline;">
                                    <form method="post" style="display:inline;" action="{{ route('upvote', $post->id) }}">
                                        @csrf


                                        <button type="submit" style="border-radius: 12px;background-color: #255269; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;">
                                            Upvote
                                        </button>
                                    </form>


                                    <span
                                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">{{ $post->upVoters()->count() }}
                                    </span>
                                    <!-- <form method="post" action=""> -->

                                    <form style="display:inline;" method="post"
                                        action="{{ route('downvote', $post->id) }}">
                                        @csrf
                                        <button type="submit" style="border-radius: 12px;background-color:#255269; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;">
                                            Downvote
                                        </button>
                                    </form>

                                </div>

                        </article><!-- End blog entry -->

                        <div class="blog-author d-flex align-items-center">

                            <img src="{{ asset('storage/Users/' . $post->user->details->image) }}"
                                class="rounded-circle float-left" alt="">
                            <div>
                                <h4>{{ $post->user->name }}</h4>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    {!! $post->user->details->about !!}
                                </p>
                            </div>
                        </div><!-- End blog author bio -->


                        <div class="blog-comments">

                            <h4 class="comments-count">{{ $post->commentsNum }} Comments</h4>
                            @foreach ($post->comments as $comment)
                                <div id="comment-1" class="comment">
                                    <div class="d-flex">
                                        <div class="comment-img"><img
                                                src="{{ asset('storage/Users/' . $comment->user->details->image) }}"
                                                alt=""></div>
                                        <div>
                                            <h5><a href="">{{ $comment->user->name }}</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time
                                                datetime="2020-01-01">{{ date('jS M Y h: i A', strtotime($comment->updated_at)) }}</time>
                                            <p>
                                                {{ $comment->body }} </p>
                                            @if (isset(Auth::user()->id) && Auth::user()->id == $comment->user->id)

                                                <form action="{{ route('comment.delete', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="border-radius: 12px;background-color: #255269; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;" type="submit">
                                                        Delete Comment
                                                    </button>
                                                </form>
                                            @endif
                                        </div>

                                    </div>
                                </div><!-- End comment #1 -->
                            @endforeach

                            <div class="reply-form">
                                <h4>Leave a comment</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form method="post" action="{{ route('comment.add') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment*"></textarea>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">






                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($posts as $postitem)
                                    @if ($postitem->id <= sizeof($posts) && $postitem->id >= sizeof($posts) - 3)
                                        <div class="post-item clearfix">
                                            <img src="{{ asset('storage/blog.post/' . $postitem->file_path) }}" alt="">
                                            <h4><a
                                                    href="{{ URL::to('blog/' . $postitem->id) }}">{{ $postitem->title }}</a>
                                            </h4>
                                            <time
                                                datetime="2020-01-01">{{ date('jS M Y', strtotime($postitem->updated_at)) }}</time>
                                            <br>
                                    @endif
                                @endforeach


                            </div><!-- End sidebar recent posts-->




                            <div class="sidebar-item ">
                                <form action="">
                                    @if (Auth::check())
                                        <div>
                                            <br>
                                            <button style="border-radius: 12px;background-color: #e6ffe6; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;">
                                                <a href="/blog/create">
                                                    Create Post
                                                </a>
                                            </button>
                                        </div>
                                    @endif
                                </form>
                            </div><!-- End sidebar search formn-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->
    </main>
    <!-- ======= Footer ======= -->

@endsection
