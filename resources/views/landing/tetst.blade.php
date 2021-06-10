{{-- <x-guest-layout> --}}
    {{-- @livewire('user.reviews') --}}
    {{-- <x-slider></x-slider> --}}
{{-- </x-guest-layout> --}}
 
<x-app-layout>
    @livewire('country-feature' , ['object'=> $cities])
</x-app-layout>