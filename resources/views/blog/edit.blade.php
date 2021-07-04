@extends('layouts.blog')
@section('content')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Post</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Edit Post</li>
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
            <form action="/blog/{{ $post->id }}"
            method="POST"
            enctype="multipart/form-data">
          @csrf
          @method('PUT')
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="title" class="form-control" id="title" value="{{ $post ->title }}" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
              <label class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="channel">Channel</label>
              <select name="channel" required>
                    <option value={{$post->channel->id}} >{{$post->channel->name}}</option>

                    @foreach ($channels as $channel)
                    <option value="{{ $channel->id }}" >{{ $channel->name }}</option>

                    @endforeach
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="description" rows="5" required>{{ $post->body }}</textarea>
              </div>
              <div class="my-3">
               
                <div class="error-message"></div>
                
              </div>
              <div class="text-center"><button type="submit">Submit Post</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
   
  </main><!-- End #main -->
 
@endsection