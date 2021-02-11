 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}">
 
         <!-- Fonts -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
     integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
     <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">
         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('css/shared.css') }}">
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
         <!-- Scripts --> <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          <script src="{{ asset('js/cus.js') }}" defer></script>
         <script src="{{ asset('js/app.js') }}" defer></script>
     </head>
<body>
  <section class=" w-full h-screen  customBack Home-swiper image ">
    @include('layouts.navigation')
    <div class="  flex flex-col justify-center items-center w-full lg:w-2/3 ml-auto h-4/5 HomeContent">
      <div class="mt-8 w-full lg:w-2/3  bg-gray-400  p-16 rounded-2xl bg-opacity-40">
        <h1 class="text-4xl lg:text-5xl text-white text-center lg:text-left  lg:mb-4">Welcome to Tourist Friend </h1>
        <h3 class="text-2xl lg:text-2xl text-white text-right mt-2">Your journey starts here</h3>
        <p class="  text-white text-xl text-center content-para mt-8 ">Discover new Countries ,cities and magnificent locations , use the blog to interact with our community and many great features</p>
      </div>
      <div class="">@if (!Auth::user())
        <div class="text-center">
          <a href="{{ route('login')}}" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Get started now</a>
        </div>
        @else
        <div class="flex justify-center items-center">
          <div class="text-center mr-2">
            <a href="" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Go back to profile</a>
          </div><div class="text-center ml-2">
            <a href="" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Visit the blog</a>
          </div>
        </div>
        @endif</div>
      
    </div>
    {{-- <div class="flex flex-col md:flex-row md:justify-end md:items-start">
      <div class="HomeContent mt-6 lg:w-1/2">
          <h1 class="text-4xl lg:text-6xl text-white text-center lg:text-left  lg:mb-4">Welcome to Tourist Friend </h1>
          <h3 class="text-2xl lg:text-2xl text-white text-right mt-2">where your destination, is on us ..</h3>
          <p class="  text-white text-xl text-center content-para mt-8 ">Discover new Countries ,cities and magnificent locations , use the blog to interact with our community and many great features</p>
        @if (!Auth::user())
        <div class="text-center">
          <a href="{{ route('login')}}" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Get started now</a>
        </div>
        @else
        <div class="flex justify-center items-center">
          <div class="text-center mr-2">
            <a href="" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Go back to profile</a>
          </div><div class="text-center ml-2">
            <a href="" class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out " >Visit the blog</a>
          </div>
        </div>
        @endif
      </div>
   
    </div> --}}
  </section>
  <section class=" w-full h-screen ">
    {{-- <div class="swiper-container w-full h-full ">
      <div class="swiper-wrapper ">
        <div class="swiper-slide  w-full h-full  image image1">
         
            
        </div>
        <div class="swiper-slide w-full h-full  image  image2"> </div>
        <div class="swiper-slide w-full h-full image  image3">Slide 3</div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div> --}}
  </section>
 
</body>
</html>