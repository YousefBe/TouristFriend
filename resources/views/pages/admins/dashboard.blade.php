<x-admins.admin-dashboard>
    <x-slot name="mainNav">
        <x-admins.dashboard-nav-links />
    </x-slot>
    @if (request()->is('admin/dashboard'))
        <x-slot name="content">
            lsa htt3ml ba3den
        </x-slot>
    @endif
    @if (request()->is('admin/users'))
        <x-slot name="content">
            @livewire('admins.users')
        </x-slot>
    @endif
    @if (request()->is('admin/countries'))
        <x-slot name="content">
            @livewire('admins.countries')
        </x-slot>
    @endif
    @if (request()->is('admin/blog'))
        <x-slot name="content">
            @livewire('admins.blog')
        </x-slot>
    @endif

</x-admins.admin-dashboard>
