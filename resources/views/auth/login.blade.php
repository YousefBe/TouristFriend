<x-guest-layout>
    <section class="flex justify-center items-center w-screen min-h-screen  h-full bg-white ">
        <div class="bg-white w-full sm:w-4/6 h-4/6 grid grid-cols-1 lg:grid-cols-2 rounded-2xl shadow-xl">
            <div class="col-span-1 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/secure-login-animate.svg') }}" class="h-5/6" alt="">
            </div>
            <div class=" col-span-1 w-full px-6 py-8 md:px-8 flex flex-col  justify-around">
                <header>
                    <h2 class="text-2xl font-semibold text-center text-gray-700 "> Welcome</h2>
                    <p class="mt-2 text-xl text-center text-gray-600">we are happy to see you back
                    </p>
                </header>
                <div class="flex items-center justify-between mt-4">
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                        <a href="#" class="text-xs text-center text-gray-500 uppercase hover:underline">Login with Email</a>
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                </div>
                <form method="POST" action="{{ route('login') }}"> 
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @csrf
                    
                    <div class="mt-8">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                        <input type="text" placeholder="Email" name="email" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="mt-8">
                        <label for="password" class="block mb-2 text-sm text-gray-600">password</label>
                        <input  type="password" placeholder="Password"  name="password" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="flex justify-between mt-4">
                        <div class="col-md-6 offset-md-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" class="border-gray-300 rounded shadow-sm  text-blue-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                            </div>
                        </div>
                        <a href="{{route('password.request')}}" class="text-sm text-gray-600 hover:underline">reset password</a>
                    </div>
                    <div class="mt-8">
                         <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-blue-400 hover:bg-blue-300  focus:outline-none focus:bg-blue-300">Login</button>
                    </div>
                </form>
                <div class="flex items-center justify-between mt-4">
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                        <a href="{{route('register')}}" class="text-xs text-center text-gray-500 uppercase hover:underline">Sign up</a>
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                </div>
                <span class=" text-xs text-gray-400 font-semibold mt-4"> i tried to coppy this design from to tailwindcss</span>

            </div>
        </div>
    </section>
</x-guest-layout>
