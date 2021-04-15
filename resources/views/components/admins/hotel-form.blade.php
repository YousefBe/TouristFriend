<div>
    <div class="bg-white px-3 py-4 rounded text-black w-full">
        <div class="">
            <h1 class="mb-8 text-base sm:text-3xl">{{ $updating ? 'update' : 'create' }} a Hotel</h1>
            <div>
                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="name"
                    placeholder="Hotel name" wire:model.lazy="name" />
                @error('name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror

                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="price"
                    placeholder="Hotel price" wire:model.lazy="price" />
                @error('price')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="rate"
                    placeholder="hotel rate" wire:model.lazy="rate" />
                @error('rate')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="">
                    <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full" name="longtiude"
                        placeholder="longtiude" wire:model.lazy="longtiude" />
                    @error('longtiude')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full" name="latitude"
                        placeholder="latitude" wire:model.lazy="latitude" />
                    @error('latitude')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @if (!$updating)
                {{-- we need wire ignore so that trix editor isn't affected by requests --}}
                <div class="mb-4" wire:model.debounce.1000ms="details" wire:ignore>
                    <input id="details" type="hidden" name="details">
                    <trix-editor input="details" class="trix-content"
                        placeholder="city details, this will be used in the users view of the city"></trix-editor>
                </div>
            @elseif($updating)
                <div class="mb-4" wire:ignore>
                    <input id="details" type="hidden" name="details">
                    <trix-editor input="details" class="trix-content" wire:model.debounce.1000ms="details">
                    </trix-editor>
                </div>
            @endif
            {{-- we put errors outside of wire ignore div --}}
            @error('details')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror


            <input type="file" wire:model.lazy="newphotos" multiple />

        </div>
    </div>

</div>
