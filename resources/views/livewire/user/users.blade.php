<div>
    <div class="w-full flex justify-center items-center mt-12 ">
        <div class=" p-6  w-full lg:w-11/12  grid grid-cols-1 lg:grid-cols-3 gap-4 ">
            {{-- profile card --}}
            <div class="lg:col-span-1 ">
                <x-user.user-profile :user="$user" />
            </div>
            {{-- update info --}}
            <div class="lg:col-span-2">
                <x-user.update-profile />
            </div>
        </div>
    </div>
    <section class=" w-full flex justify-center items-center p-6">
        {{-- call favourite locations component , after you create table and realtions --}}
    </section>
</div>
