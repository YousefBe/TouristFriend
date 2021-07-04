<div class=" bg-white w-10/12 mx-auto  h-3/5 p-4 lg:p-8 shadow-lg rounded-xl mb-8  mt-2">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        @foreach ($restaurants as $restaurant)
            <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="{{ asset($restaurant->homePageImage()) }}" alt=""
                    class=" h-48 w-full md:w-48 object-center object-cover mb-8 rounded-md ">
                <a href="{{route('user.restaurant' , $restaurant->id)}}"
                    class=" font-bold text-xl uppercase break-normal tracking-wide ">{{ Str::substr($restaurant->name, 0, 13) }}
                </a>
            </div>
        @endforeach
    </div>
    {{ $restaurants->links() }}

</div>
