<div>
    <div class="flex justify-end">
        <x-modal>
            <x-slot name="trigger">
                <button wire:click="storeModal"
                    class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                    <i class="fas fa-plus mt-1 mr-1"></i> Add a new Channel
                </button>
            </x-slot>
            <x-slot name="title">Create a new Channel</x-slot>
            <x-slot name="content">
                <div class="">
                    <label for="channel" class=" mb-4 font-semibold inline-block  ">create a new Channel</label>
                    <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2"
                        name="channel" placeholder="channel name" wire:model.lazy="name" />
                </div>
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
                        <th class="text-left p-3 px-5">#ID</th>
                        <th class="text-left p-3 px-5 hidden sm:table-cell">
                            Channel name
                        </th>
                        <th class="text-left p-3 px-5 hidden lg:table-cell">
                            No. of Posts
                        </th>
                        <th class=""></th>
                    </tr>
                    @foreach ($channels as $channel)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5 w-64">
                                <p class="text-sm sm:text-base tracking-wider font-semibold">
                                    {{ $channel->id }}
                                </p>
                            </td>
                            <td class="p-3 px-5 w-64">
                                <p class="text-base tracking-wider font-semibold hidden sm:table-cell">
                                    {{ $channel->name }}
                                </p>
                            </td>
                            <td class="p-3 px-5">
                                <p class="text-base tracking-wider font-semibold hidden lg:table-cell">
                                    {{ $channel->posts()->count() }}
                                </p>
                            </td>
                            <td class="p-3 px-5 flex flex-col sm:flex-row justify-end">
                                {{-- update channel modal --}}
                                <x-modal class="mb-2">
                                    <x-slot name="trigger">
                                        <button type="button" wire:click="updateModal({{ $channel->id }})"
                                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline flex">
                                            <i class="fas fa-edit mt-1 mr-1"></i>update
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">update a channel</x-slot>
                                    <x-slot name="content">
                                        <div class="">
                                            <label for="channel" class=" mb-4 font-semibold inline-block  ">update
                                                Channel</label>
                                            <input type="text"
                                                class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2"
                                                name="channel" placeholder="channel name" wire:model.lazy="name" />
                                        </div>
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button
                                            class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none "
                                            wire:click="update">
                                            Update
                                        </button>
                                    </x-slot>
                                </x-modal>
                                {{-- delete channel modal --}}
                                <x-modal class="mb-2 mr-2">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded w-24 focus:outline-none focus:shadow-outline">
                                            <i class="fas fa-trash mt-1 mr-1"></i>Delete
                                        </button>
                                    </x-slot>
                                    <x-slot name="title">Delete Country</x-slot>
                                    <x-slot name="content">
                                        <div class="flex p-6">
                                            <i class="fas fa-exclamation-triangle fa-2x text-red-700"></i>
                                            <h2 class=" font-bold text-red-700 text-2xl mt-1 ml-1 uppercase">Deleting a
                                                country
                                            </h2>
                                        </div>
                                        <div class="mt-4 p-6">
                                            <p class="font-semibold text-lg capitalize tracking-wider">
                                                deleting a channel means losing all its Posts , are you sure you want to
                                                continue ?
                                            </p>
                                        </div>
                                    </x-slot>
                                    <x-slot name="Action">
                                        <button wire:click="Delete({{ $channel->id }})"
                                            class="bg-red-700 hover:bg-red-900 px-4 py-2 rounded text-white focus:outline-none">
                                            Delete
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
        {{ $channels->links() }}
    </div>
</div>
