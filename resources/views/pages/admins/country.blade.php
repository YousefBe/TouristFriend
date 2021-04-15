<x-admins.admin-dashboard>
    <x-slot name="countryNav">
        <x-admins.countries-nav :id="$id" />
    </x-slot>
    @if (Route::currentRouteName() == 'admin.country.manage.cities')
        <x-slot name="content">
            @livewire('admins.country-cities' , ['country' => $country])
        </x-slot>
    @elseif(Route::currentRouteName() == 'admin.country.manage.hotels')
        <x-slot name="content">
            @livewire('admins.country-hotels' , ['country' => $country])
        </x-slot>
    @elseif (Route::currentRouteName() == 'admin.country.manage.pointsOfInterest')
        <x-slot name="content">
            @livewire('admins.country-poi' , ['country' => $country])
        </x-slot>
    @elseif (Route::currentRouteName() == 'admin.country.manage.restaurants')
        <x-slot name="content">
            @livewire('admins.country-restaurants' , ['country' => $country])
        </x-slot>
    @endif
</x-admins.admin-dashboard>
