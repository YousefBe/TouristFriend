<x-guest-layout>
    <section class="flex justify-center items-center w-screen min-h-screen h-full p-4 bg-white">
        <div class="w-full sm:w-4/6  grid grid-cols-1 lg:grid-cols-2 rounded-2xl shadow-xl">
            <div class="col-span-1 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/queue-animate.svg') }}"  alt="">
            </div>
            <div class=" col-span-1 w-full px-6 py-8 md:px-8 flex flex-col  justify-around">
                <header>
                    <h2 class="text-2xl font-semibold text-center text-gray-700 "> Welcome</h2>
                    <p class="mt-2 text-xl text-center text-gray-600">Join TouristFriend Community
                    </p>
                </header>
                <form method="POST" action="{{ route('register') }}"> 
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @csrf                    
                    <div class="mt-8">
                        <label for="name" class="block mb-2 text-sm text-gray-600">name</label>
                        <input type="text" :value="old('name')" required type="email" placeholder="name" name="name" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="mt-8">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                        <input type="text" :value="old('email')" required type="email" placeholder="Email" name="email" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="mt-8">
                        <label for="password" class="block mb-2 text-sm text-gray-600">password</label>
                        <input  type="password" placeholder="Password"  name="password" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="mt-8">
                        <label for="password_confirmation" class="block mb-2 text-sm text-gray-600">password confirmation</label>
                        <input  type="password" placeholder="confirmation"  name="password_confirmation" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                    </div>
                    <div class="mt-8">
                         <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-blue-400 hover:bg-blue-300  focus:outline-none focus:bg-blue-300">sign up</button>
                    </div>
                </form>
                <div class="flex items-center justify-between mt-4">
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                        <a href="{{route('login')}}" class="text-xs text-center text-gray-500 uppercase hover:underline">Do you have an account ?</a>
                    <span class="w-1/5 border-b  lg:w-1/4"></span>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>