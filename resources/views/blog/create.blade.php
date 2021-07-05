
@extends('layouts.blog')
@section('content')

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Create Post</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Create Post</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

      @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
          <div class="col-lg-6">
            <form action="/blog"
          method="POST"
          enctype="multipart/form-data">
          @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="title" class="form-control" id="title" placeholder="Post Title" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label  class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="file">Upload Post Image</label>
              <input type="file" name="file" required>
              
                </div>
              </div>
              <div class="form-group mt-3">
              <label class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="channel">Channel</label>
              <select name="channel" required>
                  <option >--Select Channel--</option>

                  @foreach ($channels as $channel)
                  <option value="{{ $channel->id }}" >{{ $channel->name }}</option>

                  @endforeach
              </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="5" placeholder="Post Body" required></textarea>
              </div>
              <div class="my-3">
               
                <div class="error-message"></div>
                
              </div>
              <div class="text-center"><button type="submit" style="border-radius: 12px;background-color:#255269; 
border: none;
color: white;
padding: 10px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 0px 0px;
cursor: pointer;">Submit Post</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  @endsection