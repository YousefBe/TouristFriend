<div>
    <div class="flex justify-end">
        <x-modal>
            <x-slot name="trigger">
                <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
                    wire:click="storeModal">
                    Create a User class="mb-2"
                </button>
            </x-slot>
            <x-slot name="title">Create a new User</x-slot>
            <x-slot name="content">
                <x-admins.user-form :roles="$roles" :permissions="$permissions" :updating="0">
                    </x-user-form>
            </x-slot>
            <x-slot name="Action">
                <button type="button"
                    class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
                    wire:click="store">create</button>
            </x-slot>
        </x-modal>
    </div>
    {{-- table --}}
    <div class="text-gray-900 bg-white">
        <div class="flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b relative">
                        <th class="text-left p-3 px-5">Name</th>
                        <th class="text-left p-3 px-5 hidden sm:table-cell">Email</th>
                        <th class="text-left p-3 px-5 hidden sm:table-cell">Role</th>
                        <th class=""></th>
                    </tr>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-orange-100" :class="{ ' bg-gray-200' : {{ $loop->index }}}">
                            <td class="p-3 px-5 w-64">
                                <p class=" text-sm sm:text-base tracking-wider font-semibold">{{ $user->name }}
                                    @if (Auth::user()->id == $user->id)
                                        <span class=" text-base text-red-500 inline">(me)</span>
                                    @endif

                                </p>
                            </td>
                            <td class="p-3 px-5  w-64">
                                <p class=" text-base tracking-wider font-semibold hidden sm:table-cell">
                                    {{ $user->email }}</p>
                            </td>
                            <td class="p-3 px-5">
                                <p class=" text-base tracking-wider font-semibold hidden sm:table-cell">
                                    @if ($user->roles()->first())
                                        {{ $user->roles()->first()->display_name }}
                                    @else
                                        No roles yet
                                    @endif
                                </p>
                            </td>
                            <td class="p-3 px-5 flex flex-col sm:flex-row justify-end">
                                {{-- update user modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button" wire:click="updateModal({{ $user->id }})"
                                            class="mr-3 text-sm w-16 bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Update</button>
                                    </x-slot>
                                    <x-slot name="title">update a User</x-slot>
                                    <x-slot name="content">
                                        <x-admins.user-form :roles="$roles" :permissions="$permissions" :updating="1">
                                            </x-user-form>
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
                                            wire:click="update({{ $user->id }})">
                                            Update
                                        </button>
                                    </x-slot>
                                </x-modal>
                                {{-- view user modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="mr-3 text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded w-16 focus:outline-none focus:shadow-outline">view</button>
                                    </x-slot>
                                    <x-slot name="title">View a User</x-slot>
                                    <x-slot name="content">{{ $user }}</x-slot>
                                </x-modal>
                                {{-- delete user modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded w-16 focus:outline-none focus:shadow-outline">Delete</button>
                                    </x-slot>
                                    <x-slot name="title">Delete User</x-slot>
                                    <x-slot name="content">delete</x-slot>
                                    <x-slot name="Action"> <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
                                            wire:click="delete({{ $user->id }})">
                                            delete
                                        </button></x-slot>
                                </x-modal>
                            </td>
                            {{-- eof actions --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
        {{ $users->links() }}
    </div>
</div>
