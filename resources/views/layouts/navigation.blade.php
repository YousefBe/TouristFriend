<nav class="bg-white lg:px-16  py-3 shadow  relative z-50 nav" x-data="{ open: false }">
    {{-- Main NavBar --}}
    <div class="flex items-center  justify-between ">
        <a href="{{ route('home') }}" class="flex items-center ml-3">
            <img src="{{ url('/images/icons8-tourist-backpack-64.png') }}" alt="" class="w-12">
            <span class="text-base uppercase font-bold ">TouristFriend</span>
        </a>
        <div class="px-4 cursor-pointer ml-auto lg:hidden" id="navToggler" @click="open = !open">
            <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </div>
        <div>
            <ul class="hidden lg:flex  items-center">
           @livewire('search-component')

                <a href="{{ route('home') }}" class=" mr-6  p-3 text-base font-bold uppercase ">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('home') }}" class=" mr-6  p-3  text-base font-bold uppercase  ">
                    {{ __('Blog') }}
                </a>

                @if (Auth::user())
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="flex items-center my-3   text-base font-bold uppercase  hover:text-gray-700 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div class=" flex items-center">
                                    <img class=" w-6 h-6  mr-2 rounded-full bg-cover object-fit object-cover"
                                        src="{{ asset('storage/Users/' . Auth::user()->userImage()) }}"
                                        alt="Profile picture">
                                    {{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @if (Auth::user()->hasRole('administrator'))
                                <x-dropdown-link :href="route('admin.users')">
                                    {{ __('Manage') }}
                                </x-dropdown-link>
                            @endif
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="p-3  text-base font-bold uppercase">
                        {{ __('Signup & login') }}
                    </a>
                @endif
            </ul>
        </div>

    </div>
    {{-- EOF Main NavBar --}}

    {{-- responsive NavBar --}}
    <div class="z-30 res-nav w-full bg-purple-100 opacity-90 lg:hidden md:w-1/2 overflow-y-scroll "
        :class="{'show-res-nav': open  , 'hide-res-nav' : !open}">

        <button @click="open = false"
            class="w-24 h-16 font-bold  text-3xl ml-auto absolute right-4 top-4 focus:outline-none">&times;
        </button>

        <div class="Logo w-1/2 mx-auto">
            <a href="/" class="block mb-3 mt-4">
                <img src="{{ url('/images/icons8-tourist-backpack-64.png') }}" alt="" class=" rounded-md m-auto ">
                <span class=" text-center mt-2 text-sm font-bold    uppercase block m-auto ">TouristFriend</span>
            </a>
        </div>
        <div class=" flex justify-center items-center mb-4">
            @livewire('search-component')
        </div>
        @if (Auth::user())
            <div class="mt-2 hover:bg-gray-100  transition-all  duration-500 flex items-center">
                <div class=" mr-4">
                    <img class=" w-32 h-32 rounded-full bg-cover object-fit object-cover"
                        src="{{ asset('storage/Users/' . Auth::user()->userImage()) }}" alt="Profile picture">
                </div>
                <div class=" pt-8">
                    <h2 class=" uppercase  font-bold text-lg ">{{ Auth::user()->name }}</h2>
                    <h1 class=" uppercase text-sm font-bold ">{{ Auth::user()->email }}</h1>
                    <a href="" class=" uppercase text-base font-bold ">go to profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </form>
                </div>
            </div>
        @endif

        <div class="res-nav-list ">
            <ul class="mt-6 flex flex-col h-1/6 ">
                <li class="mx-8 py-6    hover:bg-gray-100  transition-all  duration-500 uppercase  text-xl font-bold  ">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase  text-xl font-bold  ">
                    <a href="{{ route('home') }}">visit the blog</a>
                </li>

                {{-- Here we Add Users Actions --}}
                @if (Auth::user())
                    <li class="mx-8 py-6 hover:bg-gray-100  transition-all  duration-500 uppercase text-xl font-bold">
                        <a href="{{route('dashboard')}}">Profile</a>
                    </li>

                @endif
            </ul>
        </div>




        <div class="nav-footer absolute bottom-0  h-16 w-full">
            @if (!Auth::user())
                <div class="flex justify-center items-center">
                    <a href="{{ route('login') }}"
                        class="px-6 py-3 border border-black rounded-2xl mr-8  inline-block">Login</a>
                    <a href="{{ route('register') }}"
                        class="px-6 py-3 border  border-black rounded-2xl mr-8  inline-block">Signup</a>

                </div>
            @endif
        </div>
    </div>
    {{-- EOF responsive NavBar --}}



</nav>
