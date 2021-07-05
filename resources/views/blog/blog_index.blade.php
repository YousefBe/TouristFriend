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
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          @foreach ($Vposts as $post) 
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('storage/blog.post/'.$post->file_path)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ URL::to('blog/'. $post->id) }}">{{ $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ URL::to('blog/'. $post->id) }}">{{ $post->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ URL::to('blog/'. $post->id) }}"><time datetime="2020-01-01">{{ date('jS M Y', strtotime($post->updated_at)) }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ URL::to('blog/'. $post->id) }}">{{$post->commentsNum}} Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                
                <?php
  
echo substr_replace(" $post->body ", " .....", 90);
  
?></p>
                <div class="read-more">
                  <a href="{{ URL::to('blog/'. $post->id) }}">Read More</a>
                </div>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user->id)
                                    <span class="float-left" style="display:inline">
                                        <a href="{{ URL::to('blog/'. $post->id) .'/edit'}}"
                                            class="teext-gray-700 italic hover:text-gray-900 pb-1 border-b-2" style="display:inline">
                                            Edit
                                        </a>
                                        <form
                                            action="/blog/{{ $post->id }}"
                                            method="POST" style="display:inline">
                                            @csrf
                                            @method('delete')
                                            <button
                                                
                                                type="submit" style="border-radius: 12px;background-color: #eb3d4c; 
border: none;
color: white;
padding:5px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 0px 0px;
cursor: pointer;
display:inline">
                                                Delete
                                            </button>
                                        </form>

                                    </span>
                                    
                                @endif
              </div>

            </article><!-- End blog entry -->
            @endforeach
            
            

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              
              
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
              @foreach ($channels as $channel)
                <ul>

                  <li><a href="{{route('Channel',$channel->id)}}">{{ $channel->name }} <span>{{$channel->postsNumber}}</span></a></li>

                  
                </ul>
                @endforeach
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              @foreach ($posts as $post)
            @if($post->id<=sizeof($posts)&&$post->id>=sizeof($posts)-3)
                <div class="post-item clearfix">
                  <img src="{{ asset('storage/blog.post/'.$post->file_path)}}" alt="">
                  <h4><a href="{{ URL::to('blog/'. $post->id) }}">{{ $post->title }}</a></h4>
                  <time datetime="2020-01-01">{{ date('jS M Y', strtotime($post->updated_at)) }}</time>
                  <br>
              @endif
                  @endforeach

               

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item search-form">
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
  cursor: pointer;" >
                                <a href="/blog/create">
                                    Create Post
                                </a>
                            </button>
                        </div>
                    @endif
              </div><!-- End sidebar search formn-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

    
  </main><!-- End #main -->

@endsection
