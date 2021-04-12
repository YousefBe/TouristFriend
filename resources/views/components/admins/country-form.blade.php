<div>
    <div class="bg-white px-3 py-4 rounded text-black w-full">
        <div class="">
            <h1 class="mb-8 text-base sm:text-3xl">add a new country</h1>
            <div>

                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="name"
                    placeholder="country name" wire:model.lazy="name" />
                @error('name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>

            <div class="inline-block relative w-full md:w-1/2 mb-4">
                <select
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    wire:model.lazy="contnent">
                    <option selected>select contenet --</option>
                    <option value="Africa">Africa</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Asia">Asia</option>
                    <option value="Australia">Australia</option>
                    <option value="Europe">Europe</option>
                    <option value="North America">North America</option>
                    <option value="South America">South America</option>
                </select>
                @error('contnent')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="">
                    <input type="number" class="block border border-grey-light p-3 rounded mb-4 w-full" name="longtiude"
                        placeholder="longtiude" wire:model.lazy="longtiude" />
                    @error('longtiude')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <input type="number" class="block border border-grey-light p-3 rounded mb-4 w-full" name="latitude"
                        placeholder="latitude" wire:model.lazy="latitude" />
                    @error('latitude')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @if (!$updating)
                {{-- we need wire ignore so that trix editor isn't affected by requests --}}
                <div class="mb-4" wire:model.debounce.500ms="details" wire:ignore>
                    <input id="details" type="hidden" name="details">
                    <trix-editor input="details" class="trix-content"
                        placeholder="country details, this will be used in the users view of the country"></trix-editor>
                </div>
            @elseif($updating)
                <div class="mb-4" wire:ignore>
                    <input id="details" type="hidden" name="details">
                    <trix-editor input="details" class="trix-content" wire:model.debounce.500ms="details">
                    </trix-editor>
                </div>
            @endif
            {{-- we put errors outside of wire ignore div --}}
            @error('details')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror
            @if (!$updating)
                <div class="mb-4" wire:model.debounce.500ms="weather" wire:ignore>
                    <input id="weather" type="hidden" name="weather">
                    <trix-editor input="weather" class="trix-content"
                        placeholder="country weater, this will be used in the users view of the country"></trix-editor>
                </div>
            @elseif($updating)
                <div class="mb-4" wire:ignore>
                    <input id="weather" type="hidden" name="weather">
                    <trix-editor input="weather" class="trix-content" wire:model.debounce.500ms="weather">
                    </trix-editor>
                </div>
            @endif
            @error('weather')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror

            <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="population"
                placeholder="population" wire:model.lazy="population" />
            @error('population')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror

            <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="currency"
                placeholder="currency" wire:model.lazy="currency" />
            @error('currency')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror

            <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="budget"
                placeholder="budget for visting .." wire:model.lazy="budget" />
            @error('budget')
                <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
            @enderror

            {{-- flags section --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="inline-block relative w-full mb-4 h-12">
                    <select
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        wire:model.lazy="weather_flag">
                        <option selected>Weather flag</option>
                        <option value="cold">cold</option>
                        <option value="moderate">moderate</option>
                        <option value="hot">hot</option>
                    </select>
                    @error('weather_flag')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
                <div class="inline-block relative w-full mb-4 h-12">
                    <select
                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        wire:model.lazy="budget_flag">
                        <option selected>Budget flag</option>
                        <option value="low">low</option>
                        <option value="medium">medium</option>
                        <option value="expensive">expensive</option>
                    </select>
                    @error('budget_flag')
                        <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- eof flags section --}}
            @if (!$updating)
                <input type="file" wire:model.lazy="newphotos" multiple />
            @endif
        </div>
    </div>

</div>
