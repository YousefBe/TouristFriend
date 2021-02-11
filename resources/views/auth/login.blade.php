{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
      
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<x-guest-layout>
    @section('page-title')
        Signup & Loign
    @endsection
    @section('styles')
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    @endsection
    <div class=" relative w-full min-h-screen  bg-white overflow-hidden MyCont " x-data={open:false} :class="{'signUpMode' : open}">
        <div class=" absolute  w-full h-full  top-0 left-0">
            <div class="signin-signup">
                {{-- signin Form --}}
                
                <form method="POST" action="{{ route('login') }}" class="sign-in-form  "> 
                    @csrf
                    <h2 class=" text-4xl text-gray-200 mb-3 " >Sign in</h2>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email" class=" bg-transparent   border-none font-semibold leading-4 outline-none placeholder-gray-400  login-input">
                    </div>
                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password"  name="password" class=" bg-transparent border-none  font-semibold leading-4  outline-none  placeholder-gray-400 login-input">
                    </div>
                    <div class="block ">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <input type="submit" value="login" class="btn solid hover:bg-blue-500">

                    <p class=" text-base  px-3 mt-2 "> or sign in with social  platforms</p>
                    <div class="flex  justify-center">
                        <a href="#" class=" h-11 w-11 text-lg text-gray-400  rounded-full  duration-300   border border-solid  border-gray-400 flex justify-center items-center mx-2 hover:text-blue-600 hover:border-blue-600">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class=" h-11 w-11 text-lg text-gray-400  rounded-full  duration-300   border border-solid  border-gray-400 flex justify-center items-center mx-2 hover:text-blue-400 hover:border-blue-600">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                        <a href="#" class=" h-11 w-11 text-lg text-gray-400  rounded-full  duration-300   border border-solid  border-gray-400 flex justify-center items-center mx-2">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class=" h-11 w-11 text-lg text-gray-400  rounded-full  duration-300   border border-solid  border-gray-400 flex justify-center items-center mx-2">
                            <i class="fab fa-github-square"></i>
                        </a>
                    </div>
                
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel ">
                <div class="content  text-white lg:mb-2">
                    <h3 class="font-semibold  leading-4   text-2xl">New Here ?</h3>
                    <p class=" text-lg px-3">join us now by signing up !</p>
                    <a href="{{route('register')}}" class=" m-0  inline-block bg-none  py-1 border-2 border-white  w-32  h-9 rounded-2xl mt-2  font-semibold mb-14 ">SignUp</a>
                </div>

            
            <img src="{{url('/images/svg/signup.svg')}}" alt="" class="image">  
             </div>
            
            
        </div>


    </div>





</x-guest-layout>