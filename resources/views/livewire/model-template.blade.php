<div>
    {{-- Slide section --}}
    <section class=" bg-gray-100 w-full h-full  mb-4 relative">
        <x-slider :images="$objectImages" :folder="$imagesFolder" />
    </section>
    <section class=" w-full grid grid-cols-1 gap-8 lg:grid-cols-3 p-4 md:p-12 ">
        {{-- First Column --}}
        <div class="lg:col-span-2">

            <div class="bg-white p-4 lg:p-12 shadow-lg rounded-xl w-auto flex justify-between items-center mb-4 ">
                <p
                    class=" text-xl sm:text-3xl lg:text-4xl font-bold capitalize md:border-b-4 border-black border-solid">
                    {{ $name }}, {{ $contnent }}</p>
                {{-- add favorite component here --}}
            </div>
            <div class=" bg-white p-4 lg:p-12 shadow-lg rounded-xl w-auto  mb-8">
                <h3 class=" text-xl font-bold  mb-4">
                    <i class="fas fa-info-circle mr-1 sm:mr-4"></i>
                    some details about the {{ $type }}
                </h3>
                <p class=" italic  text-justify text-xl font-semibold tracking-wide">{!! $details !!}</p>
            </div>
            
        </div>

        {{-- Seconed Column --}}
        <div class=" lg:col-span-1 mb-12">
            <div class="bg-white h-96 shadow-lg rounded-xl">
                @livewire('map' , ['longtiude' => $longtiude , 'latitude'=> $latitude ,'CountryMap'=>true , 'zoomLevel' => 7 , 'POIS'=>$POI , 'hotels'=>$hotels , 'restaurants'=>$restaurants])
            </div>
            @if ($type === 'country')
                <div class="bg-white h-auto mt-12 p-8">
                    <p class=" text-xl font-bold">
                        <i class="fas fa-cloud mr-4 text-2xl"></i>
                        Country Weather
                    </p>
                    <p class=" italic  text-justify text-base  tracking-wide weather-text"> {{ $weather }}</p>
                </div>
            @endif

        </div>
    </section>
    <section class="bg-gray-100 w-full h-full p-4 lg:p-12 mb-4">
        <div class=" w-full md:w-11/12 m-right">
            @livewire('user.reviews')
        </div>
    </section>
</div>
