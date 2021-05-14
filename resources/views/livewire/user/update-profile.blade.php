<div>
    <p class="text-4xl text-center font-bold tracking-wide mb-16">
        {{ $user->details ? 'Update Profile' : 'Set up Profile' }}
    </p>
    {{-- main info section --}}
    <section class="bg-white p-6 mb-8">
        <p class=" text-gray-700 capitalize mb-8 text-4xl text-center underline">Main infos</p>
        <div class="flex flex-col md:flex-row justify-between">
            <div class="md:w-1/2 ">
                <label for="Username">Username</label>
                <input type="text" wire:model.lazy="name" class="block border border-grey-light p-3 w-3/4 rounded mb-4"
                    id="Username" name="username" placeholder="Username">
                @error('name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror

            </div>
            <div class=" md:w-1/2">
                <label for="useremail">Email</label>
                <input type="text" wire:model.lazy="email" class="block border border-grey-light p-3 w-3/4 rounded mb-4"
                    id="useremail" name="useremail" placeholder="useremail">
                @error('email')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between">
            <div class="md:w-1/2">
                <label for="userpassword">password</label>
                <input type="password" wire:model.lazy="password"
                    class="block border border-grey-light p-3 w-3/4 rounded mb-4" id="userpassword" name="password"
                    placeholder="password">
                @error('password')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror

            </div>
            <div class=" md:w-1/2">
                <label for="passwordConfirm">Confirm Password</label>
                <input type="password" class="block border border-grey-light p-3 w-3/4 rounded mb-4"
                    id="passwordConfirm" name="password_confirmation" placeholder="Confirm Password"
                    wire:model.lazy="passwordConfirm">
                @error('password_confirmation')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>


        </div>
        <div class=" text-center">
            <button wire:click="saveMainDetails"
                class="bg-green-700 hover:bg-white hover:text-green-700 px-2 transition ease-in-out duration-300 py-2 rounded text-white focus:outline-none">
                save
            </button>
        </div>
    </section>
    {{-- Addtional infos --}}
    <section class=" bg-white p-6">
        <p class=" text-gray-700 capitalize text-4xl text-center underline">Profile </p>
        <p class=" text-gray-400  mb-8 text-lg text-center ">‟this data is what will be seen on your profile”</p>
        {{-- firstname & lastname --}}
        <div class="flex flex-col md:flex-row justify-between">
            <div class="md:w-1/2 ">
                <label for="firstName">First Name</label>
                <input type="text" wire:model.lazy="first_name"
                    class="block border border-grey-light p-3 w-3/4 rounded mb-4" id="firstName" name="firstName"
                    placeholder="firstName">
                @error('first_name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror

            </div>
            <div class=" md:w-1/2">
                <label for="lastName">Last Name</label>
                <input type="text" wire:model.lazy="last_name"
                    class="block border border-grey-light p-3 w-3/4 rounded mb-4" id="lastName" name="lastName"
                    placeholder="lastName">
                @error('last_name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- country & city --}}
        <div class="flex flex-col md:flex-row justify-between">
            <div class="md:w-1/2 ">
                <label for="country">country</label>
                <select
                    class="block appearance-none w-3/4 bg-white border border-gray-400 hover:border-gray-500 p-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    wire:model.lazy="country">
                    <option>Select Country --</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
                @error('country')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
            <div class=" md:w-1/2">
                <label for="city">city</label>
                <input type="text" wire:model.lazy="city" class="block border border-grey-light p-3 w-3/4 rounded mb-4"
                    id="city" name="city" placeholder="city">
                @error('city')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- age --}}
        <div>
            <div class="md:w-1/2 ">
                <label for="age">age</label>
                <input type="number" wire:model.lazy="age" class="block border border-grey-light p-3 w-3/4 rounded mb-4"
                    id="age" name="age" placeholder="age">
                @error('age')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {{-- about --}}
        <div>
            <div class="mb-8" wire:ignore>
                <input id="about" type="hidden" name="about">
                <trix-editor input="about" class="trix-content"
                    placeholder="add some text that describes you , this will be seen in your profile"
                    wire:model.debounce.1000ms="about">
                </trix-editor>
                @error('about')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class=" mb-4 md:w-1/2">
            <label for="image">image</label>
            <input type="file" wire:model.lazy="image" id="image" />
            @error('image')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-center">
            <button wire:click="saveAddtionalDetails"
                class="bg-green-700 hover:bg-white hover:text-green-700 px-2 transition ease-in-out duration-300 py-2 rounded text-white focus:outline-none">
                {{ $user->details ? 'update' : 'save' }}
            </button>
        </div>
    </section>
    {{-- eof main info section --}}
</div>
