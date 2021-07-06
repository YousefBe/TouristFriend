<div x-data="{ active : '{{ Request::route()->getName() }}' }">
    <nav class="flex flex-col sm:flex-row">
        <a href="{{ route('admin.users') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.users'}"> Users
        </a>
        <a href="{{ route('admin.countries') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.countries'}"> Countries
        </a>
        <a href="{{ route('admin.manage-channels') }}"
            class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
            :class="{ 'border-b-2 font-medium border-blue-500' : active === 'admin.manage-channels'}"> Blog
        </a>
        {{-- <a href="{{route('admin.dashboard')}}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Tab 3
        </a>
        <a href="{{route('admin.dashboard')}}" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
            Tab 4
        </a> --}}
    </nav>
</div>
