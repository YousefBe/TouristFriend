<div x-data="{ active : '{{ Request::route()->getName() }}' }">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('admin.dashboard') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.dashboard'}">
            admin dashboard
        </a>
        <a href="{{ route('admin.users') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.users'}"> Users
        </a>
        <a href="{{ route('admin.countries') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.countries'}"> Countries
        </a>
        <a href="{{ route('admin.blog') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.blog'}"> Blog
        </a>
        {{-- <a href="{{route('admin.dashboard')}}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Tab 3
        </a>
        <a href="{{route('admin.dashboard')}}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Tab 4
        </a> --}}
    </nav>
</div>
