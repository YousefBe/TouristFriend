<div class="min-h-screen h-auto flex justify-center items-center">
    <div class=" h-auto min-h-full md:w-1/2 w-full bg-gray-200 rounded-md p-8 overflow-y-auto">
        <div class=" h-5/6 mb-8">
            {{-- form --}}
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="inline-block relative">
                        <div class="relative w-16 h-16 rounded-full overflow-hidden">
                            <img class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover"
                                src="https://picsum.photos/id/646/200/200" alt="Profile picture">
                            <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                        </div>
                        <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-6 w-full">
                    <p class="flex items-baseline">
                        <span class="text-gray-600 font-bold">{{ Auth::user()->name ?? 'guest' }}</span>
                    </p>
                    {{-- Review FORM --}}
                    <div class="mt-3">
                        <div class="flex items-center mb-4">
                            @for ($i = 0; $i < $selectedStars; $i++)
                                <svg class="w-4 h-4 fill-current  text-yellow-400 cursor-pointer"
                                    wire:click="setStars({{ $i }})" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                            @endfor
                            @for ($i = $selectedStars + 1; $i < 6; $i++)
                                <svg class="w-4 h-4 fill-current  text-gray-400 cursor-pointer"
                                    wire:click="setStars({{ $i }})" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                            @endfor

                        </div>
                        <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full bg-transparent"
                            name="title" placeholder="title" wire:model.lazy="title" />

                        <textarea name="" id="" cols="30" rows="8" class=" bg-transparent w-full"
                            placeholder="review .." wire:model.lazy="body"></textarea>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button wire:click="store"
                            class=" px-4 py-2 bg-blue-700 text-white rounded-md hover:text-blue-700 hover:bg-white transition-all ease-in-out  duration-500">submit</button>
                    </div>
                </div>

            </div>
            {{-- end Review FORM --}}
        </div>

        {{-- reviews --}}
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <div class="inline-block relative">
                    <div class="relative w-16 h-16 rounded-full overflow-hidden">
                        <img class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover"
                            src="https://picsum.photos/id/646/200/200" alt="Profile picture">
                        <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                    </div>
                    <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z" />
                    </svg>
                </div>
            </div>
            <div class="ml-6">
                <p class="flex items-baseline">
                    <span class="text-gray-600 font-bold">Mary T.</span>
                    <span class="ml-2 text-green-600 text-xs">Verified Buyer</span>
                </p>
                <div class="flex items-center mt-1">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                    @endfor

                </div>

                <div class="mt-3">
                    <span class="font-bold">Sapien consequat eleifend!</span>
                    <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="flex items-center justify-between mt-4 text-sm text-gray-600 fill-current">

                    <div class="flex items-center">
                        <span>Was this review helplful?</span>
                        <button class="flex items-center ml-6">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z" />
                            </svg>
                            <span class="ml-2">56</span>
                        </button>
                        <button class="flex items-center ml-4">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z" />
                            </svg>
                            <span class="ml-2">10</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
