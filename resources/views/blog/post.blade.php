<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a class="active" href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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
                <img src="{{ asset('storage/blog.post/'.$post->file_path)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{ $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ date('jS M Y h: i A', strtotime($post->updated_at)) }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{ $post->body }}  </p>

                
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{ $post->channel->name }}</a></li>
                </ul>

                                <!-- vote settings -->
                <div class="inline-flex">
                            <form method="post" action="{{ route('upvote', $post->id) }}">
                                @csrf


                    <button type="submit"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        Upvote
                    </button>
                    </form>


                        <span
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">{{ $post->upVoters()->count()}}
                        </span>
                    <!-- <form method="post" action=""> -->

                            <form method="post" action="{{ route('downvote', $post->id) }}">
                                @csrf
                    <button type="submit"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        Downvote
                    </button>
                    </form>

              </div>

            </article><!-- End blog entry -->
            
            <div class="blog-author d-flex align-items-center">
       
              <img src="{{ asset('storage/Users/' .$post->user->details->image)}}" class="rounded-circle float-left" alt="">
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

              <h4 class="comments-count">{{$post->commentsNum}} Comments</h4>
              @foreach ($post->comments as $comment)
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{ asset('storage/Users/' .$comment->user->details->image)}}" alt=""></div>
                  <div>
                    <h5><a href="">{{ $comment->user->name }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">{{ date('jS M Y h: i A', strtotime($comment->updated_at)) }}</time>
                    <p>
                    {{ $comment->body }} </p>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $comment->user->id)

                    <form action="{{ route('comment.delete', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500 pl-3" type="submit">
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
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
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

              
              <div class="sidebar-item ">
                <form action="">
                @if (Auth::check())
                        <div>
                            <br>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                <a href="/blog/create">
                                    Create Post
                                </a>
                            </button>
                        </div>
                    @endif
                </form>
              </div><!-- End sidebar search formn-->

              

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                @foreach ($posts as $postitem)
                @if($postitem->id<=sizeof($posts)&&$postitem->id>=sizeof($posts)-3)
                <div class="post-item clearfix">
                  <img src="{{ asset('storage/blog.post/'.$postitem->file_path)}}" alt="">
                  <h4><a href="{{ URL::to('blog/'. $postitem->id) }}">{{ $postitem->title }}</a></h4>
                  <time datetime="2020-01-01">{{ date('jS M Y', strtotime($postitem->updated_at)) }}</time>
                  <br>
              @endif
                @endforeach

                
              </div><!-- End sidebar recent posts-->

              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
