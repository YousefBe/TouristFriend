<div>
    <div class="flex justify-end">
        <x-modal>
            <x-slot name="trigger">
                <button wire:click="storeModal"
                    class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                    <i class="fas fa-plus mt-1 mr-1"></i> Add a new Country
                </button>
            </x-slot>
            <x-slot name="title">Create a new Country</x-slot>
            <x-slot name="content">
                <x-admins.country-form :updating="0"></x-admins.country-form>
                @if ($newphotos)
                    <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                        @foreach ($newphotos as $photo)
                            <img src="{{ $photo->temporaryUrl() }}" class=" w-48 h-48 object-contain">
                        @endforeach
                    </div>
                @endif

            </x-slot>
            <x-slot name="Action">
                <button type="button"
                    class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
                    wire:click="store">
                    create
                </button>
            </x-slot>
        </x-modal>
    </div>
    {{-- table --}}
    <div class="text-gray-900 bg-white">
        <div class="flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b relative">
                        <th class="text-left p-3 px-5">Country</th>
                        <th class="text-left p-3 px-5 hidden sm:table-cell">
                            contnent
                        </th>
                        <th class="text-left p-3 px-5 hidden sm:table-cell">
                            currency
                        </th>
                        <th class=""></th>
                    </tr>
                    @foreach ($countries as $country)
                        <tr class="border-b hover:bg-orange-100" :class="{ ' bg-gray-200' : {{ $loop->index }}}">
                            <td class="p-3 px-5 w-64">
                                <p class="text-sm sm:text-base tracking-wider font-semibold">
                                    {{ $country->name }}
                                </p>
                            </td>
                            <td class="p-3 px-5 w-64">
                                <p class="text-base tracking-wider font-semibold hidden sm:table-cell">
                                    {{ $country->contnent }}
                                </p>
                            </td>
                            <td class="p-3 px-5">
                                <p class="text-base tracking-wider font-semibold hidden sm:table-cell">
                                    {{ $country->currency }}
                                </p>
                            </td>
                            <td class="p-3 px-5 flex flex-col sm:flex-row justify-end">
                                {{-- update user modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button" wire:click="updateModal({{ $country->id }})"
                                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline flex">
                                            <i class="fas fa-edit mt-1 mr-1"></i>update
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">update a country</x-slot>
                                    <x-slot name="content">
                                        <x-admins.country-form :updating="1"></x-admins.country-form>
                                        @foreach ($currentphotos as $photo)
                                            <img src="{{ asset('storage/countries/' . $photo) }}" alt="">
                                        @endforeach
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none "
                                            wire:click="">
                                            Update
                                        </button>
                                    </x-slot>
                                </x-modal>
                                {{-- Manage Counntry modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="mr-3 text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded w-24 focus:outline-none flex focus:shadow-outline">
                                            <i class="fas fa-cogs mt-1 mr-1"></i>Manage

                                        </button>
                                    </x-slot>
                                    <x-slot name="title">Manage a Counntry</x-slot>
                                    <x-slot name="content">{{ $country }}</x-slot>
                                </x-modal>
                                {{-- delete Counntry modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline">
                                            <i class="fas fa-trash mt-1 mr-1"></i>Delete
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">Delete User</x-slot>
                                    <x-slot name="content">delete</x-slot>
                                    <x-slot name="Action">
                                        <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                                            delete
                                        </button>
                                    </x-slot>
                                </x-modal>
                            </td>
                            {{-- eof actions --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $countries->links() }}
    </div>
</div>
