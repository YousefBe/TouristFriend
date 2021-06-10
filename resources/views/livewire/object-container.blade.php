<div>
    <section class=" w-full min-h-screen h-auto  flex items-end justify-center mb-4 lg:mb-0 ">
        <div
            class="container bg-white rounded-lg shadow-lg p-8 flex flex-col justify-between w-10/12 section-height">
            {{-- section intro --}}
            <div class="intro mb-4">
                <h3 class="text-xl md:text-4xl font-bold tracking-wide">{{$header}}</h3>
                <p class=" text-base tracking-wide font-semibold">{{$text}}</p>
            </div>
            {{-- coutries section --}}
            {{-- should be replaced with country card component --}}
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-2">
                @foreach ($collection as $item)
                    <div class=" h-auto lg:w-full lg:h-auto flex flex-col  items-center">
                        <img src="{{ asset( $item->homePageImage()) }}" alt=""
                            class=" h-64 w-full md:w-64 object-center object-cover mb-8 rounded-md ">
                        <a href="{{route($singleItemRoute , $item->id)}}"
                            class=" font-bold text-xl uppercase break-normal tracking-wide ">{{ Str::substr($item->name, 0, 13) }} {{ $setItemLocation ? ', '. $item->country->name : '' }}
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- end of country section --}}
            <p class=" text-base tracking-wide font-semibold mt-4 text-right">and much more , checkout the whole
                list of supported <a href="{{ route($itemListRoute) }}"
                    class=" text-indigo-600 cursor-pointer ">{{$type}}</a></p>
        </div>
    </section>
</div>