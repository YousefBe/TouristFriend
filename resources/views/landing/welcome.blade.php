<x-guest-layout>

    <x-slot name="headerSectionn">
        <section class=" w-full h-screen bg-fixed  image1  image  ">
            <div class="  flex flex-col justify-center items-center w-full lg:w-2/3 ml-auto h-4/5 HomeContent">
                <div class="mt-8 w-full lg:w-2/3  bg-gray-400  p-16 rounded-2xl bg-opacity-40">
                    <h1 class="text-4xl lg:text-4xl text-white text-center lg:text-left  lg:mb-4">Welcome to Tourist
                        Friend </h1>
                    <h3 class="text-2xl lg:text-2xl text-white text-right mt-2">Your journey starts here</h3>
                    <p class="  text-white text-xl text-center content-para mt-8 ">Discover new Countries ,cities and
                        magnificent locations , use the blog to interact with our community and many great features</p>
                </div>
                <div class="">
                    @if (!Auth::user())
                        <div class="text-center">
                            <a href="{{ route('login') }}"
                                class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out ">Get
                                started now</a>
                        </div>
                    @else
                        <div class="flex justify-center items-center">
                            <div class="text-center mr-2">
                                <a href=""
                                    class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out ">Go
                                    back to profile</a>
                            </div>
                            <div class="text-center ml-2">
                                <a href=""
                                    class="text-white p-2 rounded-2xl border-2  inline-block mt-4 hover:bg-white hover:text-blue-400 transition duration-300 ease-in-out ">Visit
                                    the blog</a>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </section>
    </x-slot>
    <x-slot name="Navigate">
        {{-- start your plans --}}
        <section class=" w-full h-screen flex items-center justify-center">
            <div class="bg-white w-10/12 h-3/4 rounded-lg shadow-lg ">
                <div class="h-full flex flex-col md:flex-row justify-between ">
                    {{-- intro div --}}
                    <div class="h-2/3  md:h-full md:w-2/3 p-6 md:p-12 md:pb-0">
                        <div class="">
                            <h3 class=" text-xl md:text-3xl lg:text-4xl font-bold tracking-wider mb-4 uppercase">Get the
                                exact locations and map views</h3>
                            <p class="font-semibold text-base md:text-lg mt-4">use our app to get the exact location for
                                hotels , resturants , cities and points of interest</p>
                        </div>
                    </div>
                    {{-- svg div --}}
                    <div class=" self-end">
                        <img src="{{ url('/images/svg/navigation.svg') }}" alt="" class=" w-72 md:w-96">
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <x-slot name="blog">
        {{-- blog section --}}
        <section class=" w-full h-screen flex items-center justify-center">
            <div class="bg-white w-10/12 h-3/4 rounded-lg shadow-lg ">
                <div class="h-full flex flex-col md:flex-row justify-between ">
                    {{-- intro div --}}
                    <div class="h-2/3  md:h-full md:w-2/3 p-6 md:p-12 md:pb-0 flex flex-col justify-between">
                        <div class="">
                            <h3 class=" text-xl md:text-3xl lg:text-4xl font-bold tracking-wider mb-4 uppercase">join
                                the Blog</h3>
                            <p class="font-semibold text-base md:text-lg mt-4">join our community to get help, share
                                experiances and get in touch with people around the world</p>
                        </div>
                        <div class=" mb-8">
                            @if (!auth()->user())
                                <p class="font-semibold text-xl"><a href="{{ route('login') }}"
                                        class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">Login</a>
                                    to start using the blog .. </p>
                                <p class="font-semibold text-xl">or <a href="{{ route('register') }}"
                                        class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">signup</a>
                                    now !</p>
                            @else
                                <p class="font-semibold text-xl">or <a href="#"
                                        class=" text-indigo-600 cursor-pointer hover:underline hover:text-purple-800 capitalize">Visit
                                        the blog</a></p>
                            @endif
                        </div>
                    </div>
                    {{-- svg div --}}
                    <div class=" self-end">
                        <img src="{{ url('/images/svg/blog.svg') }}" alt="" class=" w-72 md:w-96">
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <x-slot name="countriesSection">
        {{-- supported countries section --}}
       @livewire('object-container' , ['collection'=>$countries , 'type'=> 'countries'])
    </x-slot>
    <x-slot name="citiesSection">
        {{-- supported cities section --}}
       @livewire('object-container' , ['collection'=>$cities , 'type'=> 'cities'])
    </x-slot>
    <x-slot name="hotelsSection">
        {{-- supported hotels section --}}
       @livewire('object-container' , ['collection'=>$hotels , 'type'=> 'hotels'])
    </x-slot>
    <x-slot name="PoisSection">
        {{-- supported points of interest section --}}
       @livewire('object-container' , ['collection'=>$pois , 'type'=> 'pois'])
    </x-slot>
    <x-slot name="restaurantsSection">
        {{-- supported restaurants section --}}
       @livewire('object-container' , ['collection'=>$restaurants , 'type'=> 'restaurants'])
    </x-slot>

    <x-slot name="conatctUsSection">
        @livewire('contact-us')
    </x-slot>
</x-guest-layout>
