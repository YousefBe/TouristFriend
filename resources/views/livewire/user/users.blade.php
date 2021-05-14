<div>
    <div class="w-full flex justify-center items-center mt-12 ">
        <div class=" p-6  w-full lg:w-11/12  grid grid-cols-1 lg:grid-cols-3 gap-4 ">
            {{-- profile card --}}
             {{-- update info --}}
             <div class="lg:col-span-2">
                {{-- <x-user.update-profile /> --}}
                @livewire('user.update-profile', ['user'=> Auth::user()] )
            </div>
            <div class="lg:col-span-1 mt-12 ">
                {{-- <x-user.user-profile :user="$user" /> --}}
                @livewire('user.profile', ['user'=> Auth::user()] )

                @livewire('favourites-list')
            </div>
           
        </div>
    </div>
</div>
