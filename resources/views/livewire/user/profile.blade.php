<div>
    <section class="w-full h-auto bg-white" style="min-height:600px">
        @if ($userHasDetials)
            {{-- image --}}
            <header class="w-full h-32 flex justify-center items-center bg-gray-100 shadow-md  relative  ">
                <img src="{{ asset('storage/Users/' . $image) }}" alt=""
                    class="object-cover w-56 h-56 rounded-full hover:opacity-90 hover:shadow-md   transition  duration-300 -my-8">
            </header>

            <div class="mt-16 flex items-center justify-center">
                <div class="mr-4  text-center">
                    <p class=" text-gray-600 text-2xl font-bold">{{ $reviewCount }}</p>
                    <p class="text-gray-400 text-2xl"> Reviews </p>
                </div>
                <div class=" text-center">
                    <p class=" text-gray-600 text-2xl font-bold">{{ $postsCount }}</p>
                    <p class="text-gray-400 text-2xl">
                        posts
                    </p>
                </div>
            </div>
            {{-- details --}}
            <div class=" pt-6 flex justify-center items-center">
                <p class=" text-gray-700 capitalize font-bold tracking-wide text-4xl">
                    {{ $firstName }} {{ $lastName }} ,
                </p>
                <p class=" text-gray-700  text-2xl font-semibold align-bottom">
                    {{ $age }}
                </p>
            </div>
            <div class=" flex justify-center items-center">
                <p class="text-gray-700 tracking-wider font-serifs text-2xl">
                    {{ $country }} , {{ $city }}
                </p>
            </div>
            <div class=" mt-4 p-6">
                <p class=" text-4xl text-gray-500 tracking-wide text-justify italic font-semibold">
                    {!! $about !!}
                </p>
            </div>
        @else
            <div class="text-center p-6">
                <h3 class=" font-bold text-2xl text-gray-600">User profile hasn't been set up Yet </h3>
            </div>
        @endif
    </section>
</div>
