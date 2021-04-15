<div>
    <div class="flex justify-end">
        <x-modal>
            <x-slot name="trigger">
                <button wire:click="storeModal"
                    class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                    <i class="fas fa-plus mt-1 mr-1"></i> Add a new Hotel
                </button>
            </x-slot>
            <x-slot name="title">Create a new Hotel</x-slot>
            <x-slot name="content">
                <x-admins.hotel-form :updating="0" />
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
                        <th class="text-left p-3 px-5">Name</th>
                        <th class="text-left p-3 px-5 hidden lg:table-cell">
                            rate
                        </th>
                        <th class="text-left p-3 px-5 hidden lg:table-cell">
                            price
                        </th>
                        <th class=""></th>
                    </tr>
                    @foreach ($countryHotels as $Hotel)
                        <tr class="border-b hover:bg-orange-100" :class="{ ' bg-gray-200' : {{ $loop->index }}}">
                            <td class="p-3 px-5 w-64">
                                <p class="text-sm sm:text-base tracking-wider font-semibold">
                                    {{ $Hotel->name }}
                                </p>
                            </td>
                            <td class="p-3 px-5 w-64">
                                <p class="text-base tracking-wider font-semibold hidden lg:table-cell">
                                    {{ $Hotel->rate }}
                                </p>
                            </td>
                            <td class="p-3 px-5">
                                <p class="text-base tracking-wider font-semibold hidden lg:table-cell">
                                    {{ $Hotel->price }}
                                </p>
                            </td>
                            <td class="p-3 px-5 flex flex-col sm:flex-row justify-end">
                                {{-- update user modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button" wire:click="updateModal({{ $Hotel->id }})"
                                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline flex">
                                            <i class="fas fa-edit mt-1 mr-1"></i>update
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">update a hotel</x-slot>
                                    <x-slot name="content">
                                        <x-admins.hotel-form :updating="1" />
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none "
                                            wire:click="update">
                                            Update
                                        </button>
                                    </x-slot>
                                </x-modal>
                                {{-- delete hotel modal --}}
                                <x-modal class="mb-2 mr-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline">
                                            <i class="fas fa-trash mt-1 mr-1"></i>Delete
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">Delete hotel</x-slot>
                                    <x-slot name="content">
                                        <div class="flex p-6">
                                            <i class="fas fa-exclamation-triangle fa-2x text-red-700"></i>
                                            <h2 class=" font-bold text-red-700 text-2xl mt-1 ml-1 uppercase">Deleting a
                                                Hotel
                                            </h2>
                                        </div>
                                        <div class="mt-4 p-6">
                                            <p class="font-semibold text-lg capitalize tracking-wider">
                                                delete a hotel
                                            </p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button wire:click="Delete({{ $Hotel->id }})"
                                            class="bg-red-700 hover:bg-red-900 px-4 py-2 rounded text-white focus:outline-none">
                                            Delete
                                        </button>
                                    </x-slot>
                                </x-modal>
                                {{-- images modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button" wire:click="HotelImages({{ $Hotel->id }})"
                                            class="text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline">
                                            <i class="fas fa-eye mt-1 mr-1"></i>IMAGES
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">{{ $Hotel->name }} images</x-slot>
                                    <x-slot name="content">
                                        @if ($HotelImages)
                                            @foreach ($HotelImages as $image)
                                                <div class="mb-2 flex justify-center items-start">
                                                    <img src="{{ asset('storage/hotels/' . $image->file_name) }}"
                                                        alt="" class=" w-10/12 h-full mb-2 ">
                                                    <button wire:click="DeleteImage({{ $image->id }})"
                                                        class="bg-red-700 hover:bg-red-900 px-2 py-1 rounded text-white focus:outline-none">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            @endforeach
                                        @endif
                                    </x-slot>
                                </x-modal>
                            </td>
                            {{-- eof actions --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $countryHotels->links() }}
    </div>
</div>
