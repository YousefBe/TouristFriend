<x-guest-layout>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    @endsection
    <div class=" relative flex  justify-between min-h-screen  bg-white overflow-hidden SignupCont">
        <div class=" flex flex-col justify-end form-row">
                {{-- SignUp form --}}
                <form   method="POST" action="{{ route('register') }}" class="sign-up-form"> 
                    @csrf
                    <h2 class=" text-4xl mb-3 " >Sign up</h2>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-user "></i>
                        <input type="text" placeholder="UserName" class=" bg-transparent   border-none font-semibold leading-4 outline-none placeholder-gray-400  login-input" name="name" :value="old('name')" required autofocus>
                    </div>
                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-envelope"></i>
                        <input name="email" :value="old('email')" required type="email" placeholder="Email" class=" bg-transparent   border-none font-semibold leading-4 outline-none placeholder-gray-400  login-input">
                    </div>
                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password"  name="password" required autocomplete="new-password" class=" bg-transparent border-none  font-semibold leading-4  outline-none  placeholder-gray-400 login-input">
                    </div>
                    <div class="h-14 w-full my-3 bg-gray-200  field-input px-2">
                        <i class="fas fa-lock"></i>
                        <input type="password" type="password" name="password_confirmation" required placeholder="confirm Password" class=" bg-transparent border-none  font-semibold leading-4  outline-none  placeholder-gray-400 login-input">
                    </div>
                    <input type="submit" value="signup" class="btn solid hover:bg-blue-500">

                    <p class=" text-base  px-3 mt-2 "> or sign up with social  platforms</p>
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

        <div class="orLogin">
            <div class=" w-full ">
                <div class="content  text-center mt-32">
                    <h3 class=" font-semibold  leading-4  text-2xl ">Already a member ?</h3>
                    <p class=" text-xl mt-2  px-3">Sign in !</p>
                    <button @click="open = !open" class="btn">log in</button>
                </div>  
                <img src="{{asset('/images/svg/login.svg')}}" class=" lg:mt-64 hidden lg:block  "  alt="">
            </div>
            
        </div>
    </div>


</x-guest-layout>
