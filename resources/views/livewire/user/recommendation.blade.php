<div class=" flex justify-center items-center h-screen">
    <section class="bg-white w-5/6 md:w-11/12 m-auto  h-5/6 grid grid-cols-1 lg:grid-cols-3 rounded-xl shadow-xl">
        <div class=" col-span-2 row-span-2 p-4 w-full lg:w-5/6 h-auto my-auto">
            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Recommend a country</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Your Budget</label>
                <span class=" text-gray-400 text-sm"> in dollars</span>
                <input wire:model.debounce.500ms="userBudget"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="Budget" />
                @error('userBudget')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"> choose
                        destination contnent</label>
                    <select wire:model="userContnentChoice"
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="">select where you want to go ?</option>
                        @foreach ($contnents as $contnent)
                            <option value="{{ $contnent }}">{{ $contnent }}</option>
                        @endforeach
                    </select>
                    @error('userContnentChoice')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Prefered
                        Weather</label>
                    <span class=" text-sm text-gray-400">weather of supported countries</span>
                    <select wire:model="userWeatherPrefrence"
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <option value="">weather of place you want to go ?</option>
                        @foreach ($weatherOptions as $weather)
                            <option value="{{ $weather }}">{{ $weather }}</option>
                        @endforeach
                    </select>
                    @error('userWeatherPrefrence')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">You're looking
                    for</label>
                <select wire:model="destinationProp"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    <option>slesct your destination main feature</option>
                    @foreach ($userDestinationIsFamousFor as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
                @error('destinationProp')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>

            <div class=" mt-12 text-center">
                <button
                    class=" text-white p-2 bg-green-400 hover:bg-green-600 transition ease-out duration-300 rounded-2xl"
                    wire:click="recommend">recommend</button>
            </div>
        </div>
        <div class=" col-span-1 p-4 flex justify-center items-center">
            @if ($recommendedCountry)
                <div>
                    <p class=" text-gray-400 text-xl capitalize font-bold tracking-wide  underline">we recommend you to visit : </p>
                    @if ($message)
                        <span class=" text-gray-300 text-sm font-semibold mb-4 inline-block">{{$message}}</span>
                    @endif
                    <div class=" text-center">
                        <img src="{{ asset($recommendedCountry->homePageImage()) }}" alt=""
                        class=" h-64 w-full md:w-64 object-center mx-auto object-cover rounded-md ">
                        <a href="{{route('user.country', $recommendedCountry->id)}}" class=" mb-4 font-bold text-2xl underline">{{$recommendedCountry->name}}</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
