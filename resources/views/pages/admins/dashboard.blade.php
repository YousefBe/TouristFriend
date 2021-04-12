<x-admins.admin-dashboard>
    @if (request()->is('admin/users'))
        <x-slot name="content" >
            @livewire('admins.users')
        </x-slot>   
    @endif
    @if (request()->is('admin/dashboard'))
        <x-slot name="content" >
          dash
        </x-slot>   
    @endif
   
    @if (request()->is('admin/countries'))
        <x-slot name="content" >
             @livewire('admins.countries')
        </x-slot>   
    @endif
   
</x-admins.admin-dashboard>
