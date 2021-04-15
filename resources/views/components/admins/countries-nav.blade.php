<div x-data="{ active : '{{ Request::route()->getName() }}' }">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('admin.country.manage.cities', $CountryId) }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none uppercase"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.country.manage.cities'}">
            cities
        </a>
        <a href="{{ route('admin.country.manage.hotels', $CountryId) }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none uppercase"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.country.manage.hotels'}"> hotels
        </a>
        <a href="{{ route('admin.country.manage.pointsOfInterest', $CountryId) }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none uppercase"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.country.manage.pointsOfInterest'}">
            points of interest
        </a>
        <a href="{{ route('admin.country.manage.restaurants', $CountryId) }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none uppercase"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.country.manage.restaurants'}">
            resturants
        </a>
    </nav>
</div>
