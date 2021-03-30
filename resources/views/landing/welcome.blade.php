<x-guest-layout>

  <x-slot name="headerSectionn">
    <section class=" w-full h-screen bg-fixed  image1  image  ">
      <div class="  flex flex-col justify-center items-center w-full lg:w-2/3 ml-auto h-4/5 HomeContent">
        <div class="mt-8 w-full lg:w-2/3  bg-gray-400  p-16 rounded-2xl bg-opacity-40">
          <h1 class="text-4xl lg:text-4xl text-white text-center lg:text-left  lg:mb-4">Welcome to Tourist Friend </h1>
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
    </section>
  </x-slot>

  <x-slot name="plansSection">
        {{-- start your plans   --}}
    <section class=" w-full h-screen flex items-center justify-center">
      <div class="bg-white w-10/12 h-3/4 rounded-lg shadow-lg p-12 ">
        <div class="h-full flex flex-col md:flex-row justify-between ">
          {{-- intro div --}}
          <div class="h-2/3  md:h-full md:w-2/3 p-6 md:p-12 flex flex-col justify-between">
            <div class="">
              <h3 class=" text-xl md:text-3xl lg:text-4xl font-bold tracking-wider mb-4 uppercase">Start Planing your next journy</h3>
              <p class="font-semibold text-base md:text-lg mt-4">make your plans based on your budget and prefrences .. </p>
            </div>
            @if (auth::user())

            @else
              <div class="mt-12 ">
                <p class="font-semibold text-xl"><a href="{{route('login')}}" class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">Login</a> to start planing .. </p>
                <p class="font-semibold text-xl">or <a href="{{route('register')}}"  class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">signup</a> now !</p>
              </div>
            @endif
          </div>
          {{-- svg div --}}
          <div class=" self-end -mt-8" >
            <img src="{{url('/images/svg/plan.svg')}}" alt="" class=" w-72 md:w-96"> 
          </div> 
        </div>
      </div>
    </section>
  </x-slot>
  <x-slot name="Navigate">
        {{-- start your plans   --}}
    <section class=" w-full h-screen flex items-center justify-center">
      <div class="bg-white w-10/12 h-3/4 rounded-lg shadow-lg ">
        <div class="h-full flex flex-col md:flex-row justify-between ">
          {{-- intro div --}}
          <div class="h-2/3  md:h-full md:w-2/3 p-6 md:p-12 md:pb-0">
            <div class="">
              <h3 class=" text-xl md:text-3xl lg:text-4xl font-bold tracking-wider mb-4 uppercase">Get the exact locations and map views</h3>
              <p class="font-semibold text-base md:text-lg mt-4">use our app to get the exact location for hotels , resturants , cities and points of interest</p>
            </div>
          </div>
          {{-- svg div --}}
          <div class=" self-end" >
            <img src="{{url('/images/svg/navigation.svg')}}" alt="" class=" w-72 md:w-96"> 
          </div> 
        </div>
      </div>
    </section>
  </x-slot>
  <x-slot name="blog">
        {{--blog section  --}}
    <section class=" w-full h-screen flex items-center justify-center">
      <div class="bg-white w-10/12 h-3/4 rounded-lg shadow-lg ">
        <div class="h-full flex flex-col md:flex-row justify-between ">
          {{-- intro div --}}
          <div class="h-2/3  md:h-full md:w-2/3 p-6 md:p-12 md:pb-0 flex flex-col justify-between">
            <div class="">
              <h3 class=" text-xl md:text-3xl lg:text-4xl font-bold tracking-wider mb-4 uppercase">join the Blog</h3>
              <p class="font-semibold text-base md:text-lg mt-4">join our community to get help, share experiances and get in touch with people around the world</p>
            </div>
            <div class=" mb-8">
             @if (!auth()->user())
             <p class="font-semibold text-xl"><a href="{{route('login')}}" class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">Login</a> to start using the blog .. </p>
             <p class="font-semibold text-xl">or <a href="{{route('register')}}"  class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">signup</a> now !</p>
             @else
             <p class="font-semibold text-xl">or <a href="#"  class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">Visit the blog</a></p>
             @endif
            </div>
          </div>
          {{-- svg div --}}
          <div class=" self-end" >
            <img src="{{url('/images/svg/blog.svg')}}" alt="" class=" w-72 md:w-96"> 
          </div> 
        </div>
      </div>
    </section>
  </x-slot>

  <x-slot name="countriesSection">
      {{-- supported countries section--}}
    <section class=" w-full min-h-screen h-auto  flex items-end justify-center ">
          <div class="container bg-white rounded-lg shadow-lg p-8 flex flex-col justify-between w-10/12 section-height">
            {{-- section intro --}}
          <div class="intro mb-4">
            <h3 class="text-xl md:text-4xl font-bold tracking-wide">Discover Your Next Destination ..</h3>
            <p class=" text-base tracking-wide font-semibold">among our supported countries and cities , a sample of out supported countries .. </p>
          </div>
          {{-- coutries section --}}
          {{-- should be replaced with country card component  --}}
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-2">
              {{-- single country --}}
              <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="https://via.placeholder.com/250" alt="">
                <h3>Country Name</h3>
                <p>some text about it</p>
                <a href=""> link to know more</a>
              </div>
              {{-- single country --}}
              <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="https://via.placeholder.com/250" alt="">
                <h3>Country Name</h3>
                <p>some text about it</p>
                <a href=""> link to know more</a>
              </div>
              {{-- single country --}}
              <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="https://via.placeholder.com/250" alt="">
                <h3>Country Name</h3>
                <p>some text about it</p>
                <a href=""> link to know more</a>
              </div>
              <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="https://via.placeholder.com/250" alt="">
                <h3>Country Name</h3>
                <p>some text about it</p>
                <a href=""> link to know more</a>
              </div>
            </div>
            {{-- end of country section --}}
            <p class=" text-base tracking-wide font-semibold mt-4 text-right">and much more , checkout the whole list of supported <a href="{{ route('home')}}" class=" text-indigo-600 cursor-pointer ">Coutnries</a></p>
          </div>
    </section>
  </x-slot>

  <x-slot name="citiesSection">
    {{-- supported cities section--}}
    <section class=" w-full min-h-screen h-auto  flex items-end justify-center  mt-8 lg:mt-0">
      <div class="container bg-white rounded-lg shadow-lg p-8 flex flex-col justify-between w-10/12 section-height">
        {{-- section intro --}}
       <div class="intro mb-4">
        <h3 class="text-xl md:text-4xl font-bold tracking-wide capitalize">Some of our mosted viewed cities ..</h3>
       </div>
       {{-- coutries section --}}
       {{-- should be replaced with country card component  --}}
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-2">
          {{-- single country --}}
          <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
            <img src="https://via.placeholder.com/250" alt="">
            <h3>Country Name</h3>
            <p>some text about it</p>
            <a href=""> link to know more</a>
          </div>
          {{-- single country --}}
          <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
            <img src="https://via.placeholder.com/250" alt="">
            <h3>Country Name</h3>
            <p>some text about it</p>
            <a href=""> link to know more</a>
          </div>
          {{-- single country --}}
          <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
            <img src="https://via.placeholder.com/250" alt="">
            <h3>Country Name</h3>
            <p>some text about it</p>
            <a href=""> link to know more</a>
          </div>
          <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
            <img src="https://via.placeholder.com/250" alt="">
            <h3>Country Name</h3>
            <p>some text about it</p>
            <a href=""> link to know more</a>
          </div>
        </div>
        {{-- end of country section --}}
        <p class=" text-base tracking-wide font-semibold mt-4 text-right">and much more , checkout the whole list of supported cities <a href="{{ route('home')}}" class=" text-indigo-600 cursor-pointer ">Coutnries</a></p>
      </div>
    </section>
  </x-slot>

  <x-slot name="conatctUsSection">
    @livewire('contact-us')
  </x-slot>

</x-guest-layout>
