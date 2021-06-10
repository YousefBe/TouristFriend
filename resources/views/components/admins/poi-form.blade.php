<div>
    <div class="bg-white px-3 py-4 rounded text-black w-full">
        <div class="">
            <h1 class="mb-8 text-base sm:text-3xl">{{ $updating ? 'update' : 'create' }} a poing of interest</h1>
            <div>
                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="name"
                    placeholder="poing of interest name" wire:model.lazy="name" />
                @error('name')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror

                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2" name="cost"
                    placeholder="poing of interest cost" wire:model.lazy="cost" />
                @error('cost')
                    <span class="text-sm text-red-600 tracking-wide">{{ $message }}</span>
                @enderror
                <input type="text" class="block border border-grey-light p-3 rounded mb-4 w-full md:w-1/2"
                    name="working_hours" placeholder="Point of interest working_hours"
                    wire:model.lazy="working_hours" />
                @error('working_hours')
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
                        placeholder="Point of interest details, this will be used in the users view of the Point">
                    </trix-editor>
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


            <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photos</label>
                  <div class='flex items-center justify-center w-full'>
                      <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-200 hover:border-purple-300 group'>
                          <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='lowercase text-sm text-gray-400 group-hover:text-white pt-1 tracking-wider'>Select some photos for the country</p>
                          </div>
                        <input type='file' class="hidden" wire:model.lazy="newphotos" multiple />
                      </label>
                  </div>
              </div>

        </div>
    </div>

</div>
