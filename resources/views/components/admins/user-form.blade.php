<div>
    <div class="bg-white px-3 py-4 rounded text-black w-full">
        <div class="">
            <h1 class="mb-8 text-base sm:text-3xl">{{ $updating ? 'Update user' : 'Create a new account' }}</h1>
            <input type="text" class="block border border-grey-light p-3 rounded mb-4" name="fullname"
                placeholder="Full Name" wire:model.lazy="userName" />
            @error('userName')
                <span class=" text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror
            <input type="text" class="block border border-grey-light p-3 rounded mb-4" name="email" placeholder="Email"
                wire:model.lazy="userEmail" />
            @error('userEmail')
                <span class=" text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror
            @if (!$updating)
                <input type="password" class="block border border-grey-light p-3 rounded mb-4" name="password"
                    placeholder="Password" wire:model.lazy="userPassword" />
            @endif
            <div class="inline-block relative w-1/2 mb-4">
                <select
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    wire:model.lazy="userRole">
                    <option selected>select Role --</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- permissions section --}}
        <div class="grid grid-cols-2 sm:grid sm:grid-cols-4 ">
            @foreach ($permissions as $permission)
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" wire:model="userPermissions" value="{{ $permission->id }}"
                        wire:click="permissionChecked({{ $permission->id }})" id="{{ rand() }}"
                        class="form-checkbox h-5 w-5 text-gray-600"><span
                        class="ml-2 text-gray-700 text-sm">{{ $permission->display_name }}</span>
                </label>
            @endforeach
        </div>
    </div>
</div>
