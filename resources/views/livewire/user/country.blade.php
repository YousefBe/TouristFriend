{{-- <x-models-component :name="$country->name" :object="$country">
    <x-slot name="slider">
        <x-slider :images="$countryImages" :folder="'countries'" />
    </x-slot>   
    
</x-models-component> --}}


@livewire('model-template' , ['type' => 'country' , 'object'=> $country])