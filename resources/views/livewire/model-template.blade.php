<div>
    {{-- Slide section --}}
    <section class=" bg-gray-100 w-full h-full  mb-4 relative">
        <x-slider :images="$objectImages" :folder="$imagesFolder" />
    </section>
    <section class=" w-full grid grid-cols-1 gap-8 lg:grid-cols-3 p-4 md:p-12 md:pb-0 ">
        {{-- First Column --}}
        <div class="lg:col-span-2">

            <div class="bg-white p-4 lg:p-8 shadow-lg rounded-xl w-auto  mb-4 ">
                <div class="flex justify-between">
                    <p class=" text-xl sm:text-3xl lg:text-4xl font-bold capitalize mb-4">
                        {{ $name }}, {{ $placeLocation }}</p>
                    @livewire('favourites' , ['object'=> $object , 'routeWithModelId'=>'/'. Request::path()])
                </div>
                {{-- i know this is bad --}}
                @if ($type === 'country')
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-users mr-4"></i>
                        {{ $population }}
                    </p>
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-money-bill-wave mr-4"></i>
                        {{ $currency }}
                    </p>
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-dollar-sign mr-4"></i>
                        {{ $budget }}
                    </p>
                @elseif ($type === 'hotel')
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-star"></i>
                        Rate: {{ $rate }}
                    </p>
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-money-bill-wave mr-4"></i>
                        {{ $price }}
                    </p>
                @elseif ($type === 'restaurant')
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-star"></i>
                        Rate:  {{ $rate }}
                    </p>
                @elseif ($type ==='POI')
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="fas fa-money-bill"></i>
                        {{ $cost }}
                    </p>
                    <p class=" text-lg font-semibold tracking-wide mb-2">
                        <i class="far fa-clock"></i>
                        {{ $workingHours }}
                    </p>
                @endif
                {{-- add favorite component here --}}
            </div>
            <div class=" bg-white p-4 lg:p-12 shadow-lg rounded-xl w-auto  mb-8" style="min-height: 580px">
                <h3 class=" text-xl font-bold  mb-4">
                    <i class="fas fa-info-circle mr-1 sm:mr-4"></i>
                    some details about the {{ $type }}
                </h3>
                <p class=" italic  text-justify text-xl font-semibold tracking-wide">{!! $details !!}</p>
            </div>
            @if ($type === 'country')
                @livewire('country-feature', ['CountryId' => $object->id , 'type'=>'cities' ])
                @livewire('country-feature', ['CountryId' => $object->id , 'type'=>'hotels' ])
                @livewire('country-feature', ['CountryId' => $object->id ,
                'type'=>'restaurants' ])
                @livewire('country-feature', ['CountryId' => $object->id ,
                'type'=>'points of interest' ])

            @endif
        </div>

        {{-- Seconed Column --}}
        <div class=" lg:col-span-1 mb-12">
            <div class="bg-white h-96 shadow-lg rounded-xl">
                @livewire('map' , ['longtiude' => $longtiude , 'latitude'=> $latitude ,'mapType'=>$type , 'zoomLevel'
                => $zoomLevel , 'POIS'=>$POI , 'hotels'=>$hotels , 'restaurants'=>$restaurants , 'destination'=> $object , 'cities'=>$cities 
                ])
            </div>
            @if ($weather)
                <div class="bg-white h-auto mt-44 p-8 rounded-xl">
                    <p class="text-xl font-bold">
                        <i class="fas fa-cloud mr-4 text-2xl"></i>
                        Country Weather
                    </p>
                    <p class=" italic  text-justify text-xl  tracking-wide weather-text"> {{ $weather }}</p>
                </div>
            @endif

        </div>
    </section>
    <section class="bg-gray-100 w-full h-full p-4 lg:pt-0 lg:p-12  my-4">
        <div class=" w-full md:w-8/12 m-right">
            @livewire('user.reviews' , ['objectToBeReviewd'=> $object , 'type' => $modelType])
        </div>
    </section>
</div>
