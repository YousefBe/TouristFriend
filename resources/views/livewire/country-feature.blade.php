<div class=" bg-white p-4 lg:p-8 shadow-lg rounded-xl w-auto  mb-8  mt-2">
    <p class=" text-2xl mb-4 font-bold tracking-wider">
        <i class="{{ $icon }}"></i>
        List of our supported Country {{ $type }}
    </p>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($collection as $item)
            <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                <img src="{{ asset($item->homePageImage()) }}" alt=""
                    class=" h-64 w-full md:w-64 object-center object-cover mb-8 rounded-md ">
                <a href=""
                    class=" font-bold text-xl uppercase break-normal tracking-wide ">{{ Str::substr($item->name, 0, 13) }}
                </a>
            </div>
        @endforeach
    </div>
    {{ $collection->links() }}

</div>
