    <section class="flex justify-center items-center w-screen min-h-screen h-full p-4 bg-white">
        <div class="w-full sm:w-4/6  grid grid-cols-1 lg:grid-cols-2 rounded-2xl shadow-xl">
            <div class="col-span-1 hidden lg:flex items-center justify-center">
                <img src="{{ asset('images/queue-animate.svg') }}" alt="">
            </div>
            <div class=" col-span-1 w-full px-6 py-8 md:px-8 flex flex-col  justify-around">
                <header>
                    <h2 class="text-2xl font-semibold text-center text-gray-700 "> Almost there..</h2>
                    <p class="mt-2 text-xl text-center text-gray-600">just add some details about you
                    </p>
                </header>
                <div class="flex justify-between w-full">
                    <div class="mt-8">
                        <label for="First Name" class="block mb-2 text-sm text-gray-600">First Name</label>
                        <input type="text" wire:model.lazy="first_name" :value="old('first_name')" required type="email"
                            placeholder="First Name"
                            class=" w-5/6 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                        @error('first_name')
                            <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-8">
                        <label for="name" class="block mb-2 text-sm text-gray-600">Last Name</label>
                        <input type="text" wire:model.lazy="last_name" :value="old('name')" required type="email"
                            placeholder="Last Name"
                            class=" w-5/6 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                        @error('last_name')
                            <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-8">
                    <label for="country" class="block mb-2 text-sm text-gray-600">country</label>
                    <select
                        class="block max-w-full w-5/6 appearance-none px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40"
                        wire:model.lazy="country">
                        <option>Select Country --</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class=" flex flex-col lg:flex-row justify-between">
                    <div class="mt-4 ">
                        <label for="city" class="block mb-2 text-sm text-gray-600">city</label>
                        <input type="text" placeholder="city" wire:model.lazy="city"
                            class="w-5/6 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                        @error('city')
                            <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label for="age" class="block mb-2 text-sm text-gray-600">age</label>
                        <input type="number" placeholder="age" wire:model.lazy="age"
                            class="w-5/6 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg  focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-40">
                        @error('age')
                            <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-8">
                    <label for="about" class="block mb-2 text-sm text-gray-600">say something that describes you</label>
                    <textarea input="about" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"
                        placeholder="add some text that describes you , this will be seen in your profile"
                        wire:model.debounce.1000ms="about">
                    </textarea>
                    @error('about')
                        <span class="text-sm block text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-8">
                    <button wire:click="addDetails"
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform rounded-md bg-blue-400 hover:bg-blue-300  focus:outline-none focus:bg-blue-300">sign
                        up</button>
                </div>



            </div>
        </div>
    </section>
