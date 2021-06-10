<div class="relative mr-6 my-2" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input type="search" class=" w-64 bg-purple-white shadow rounded border-0 p-3" wire:model.debounce.500ms="query"
        placeholder="Search by name..." @focus="isOpen = true" @keydown.escape.window="isOpen = false"
        @keydown="isOpen =true">
    <div class="absolute  bg-white rounded w-64 mt-1 z-50  overflow-y-scroll" x-show="isOpen" style="max-height: 200px" @keydown.escape.window="isOpen = false" >
        @if ($searchResults)
            @foreach ($searchResults->groupByType() as $type => $modelSearchResults)
              
                @foreach ($modelSearchResults as $searchResult)
                    <ul>
                       <li class=" p-3 hover:bg-gray-100 rounded-t-md transition ease-out">
                        <a href="{{ $searchResult->url }}" class=" uppercase font-semibold text-base">{{ $searchResult->title }} ,   {{ $type }}</a>
                       </li>
                    </ul>
                @endforeach
            @endforeach
        @endif


    </div>
</div>
