@if(Request::is('/')) <nav class="bg-transparent lg:px-16  py-3   relative z-50  nav" x-data="{ open: false }">
@else 
<nav class="bg-gray-100 lg:px-16  py-3 shadow  relative z-50 nav" x-data="{ open: false }">
@endif
    {{-- Main NavBar --}}
 <div class="flex items-center  justify-between ">
    <a href="{{ route('home') }}" class="flex items-center ml-3">
        <img src="{{url('/images/icons8-tourist-backpack-64.png')}}" alt="" class="w-12">
        <span class="text-base uppercase font-bold ">TouristFriend</span>
    </a>
    <div class="px-4 cursor-pointer ml-auto lg:hidden" id="navToggler"  @click="open = !open">
        <svg class="w-6 h-6" fill="white" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </div>

    <div>
        <ul class="hidden lg:flex ">
            <a href="{{route('home')}}"  class=" mr-6  p-3 text-base font-bold uppercase   ">
                {{ __('Home') }}
            </a>
            <a href="{{route('home')}}"  class=" mr-6  p-3  text-base font-bold uppercase  ">
                {{ __('Blog') }}
            </a>
            <a href="{{route('home')}}"  class=" mr-6 p-3 text-base font-bold uppercase  ">
                {{ __('About Us') }}
            </a>
            <a href="{{route('contact-us')}}"  class=" mr-6  p-3   text-base font-bold uppercase  ">
                {{ __('Contact Us') }}
            </a>
            
           @if (Auth::user())
           <x-dropdown>
            <x-slot name="trigger">
                <button class="flex items-center my-3   text-base font-bold uppercase  hover:text-gray-700 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div class="">{{Auth::user()->name}}</div>
    
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
    
            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
            </x-dropdown>
             @else
        <a href="{{route('login')}}"  class="   p-3  text-base font-bold uppercase    ">
            {{ __('Signup & login') }}
        </a>
           @endif
        </ul>
    </div>
    
 </div>
    {{--EOF Main NavBar --}}

{{-- responsive NavBar --}}
 <div  class="z-30 res-nav w-full bg-purple-100 opacity-90 lg:hidden md:w-1/2 " :class="{'show-res-nav': open  , 'hide-res-nav' : !open}"  >
   
    <button @click="open = false" class="w-24 h-16 font-bold  text-3xl ml-auto absolute right-4 top-4 focus:outline-none">&times;
    </button>

    <div class="Logo w-1/2 mx-auto">
        <a href="/" class="block mb-3 mt-12" >
            <img src="{{ url('/images/icons8-tourist-backpack-64.png') }}" alt="" class=" rounded-md m-auto ">
            <span class=" text-center mt-2 text-sm font-bold    uppercase block m-auto ">TouristFriend</span>
        </a>
    </div>

    @if (Auth::user())
     <div class="mt-2 hover:bg-gray-100  transition-all  duration-500 flex items-center">
        <div class="">
            <svg class="h-24 w-24 fill-current text-gray-400  rounded-lg " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>
        <div>
            <h2 class=" uppercase  font-bold text-lg ">{{Auth::user()->name}}</h2>
            <h1 class=" uppercase text-sm font-bold ">{{Auth::user()->email}}</h1>
            <a href="" class=" uppercase text-base font-bold ">go to profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
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
                 <a href="{{ route('home') }}" >Home</a>
            </li>
             <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase  text-xl font-bold  ">
                 <a href="{{ route('contact-us') }}" >Contact Us</a>
            </li>
             <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase  text-xl font-bold  ">
                 <a href="{{ route('home') }}" >about us</a>
            </li>
             <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase  text-xl font-bold  ">
                 <a href="{{ route('home') }}" >visit the blog</a>
            </li>
            
           {{-- Here we Add Users Actions --}}
           @if (Auth::user())
         
     
            <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase text-xl font-bold">
                <a href="" >Plan a new Trip</a>
           </li>
            
            <li class="mx-8 py-6   hover:bg-gray-100  transition-all  duration-500 uppercase text-xl font-bold">
                <a href="" >Update Profile</a>
           </li>  
            
            @endif
         </ul>
     </div>




     <div class="nav-footer absolute bottom-0  h-16 w-full">
        @if (!Auth::user())
            <div class="flex justify-center items-center">
            <a href="{{ route('login') }}" class="px-6 py-3 border border-black rounded-2xl mr-8  inline-block" >Login</a>
            <a href="{{ route('register') }}" class="px-6 py-3 border  border-black rounded-2xl mr-8  inline-block" >Signup</a>

            </div>
        @endif
     </div>
</div>
{{-- EOF responsive NavBar --}}

   

</nav>