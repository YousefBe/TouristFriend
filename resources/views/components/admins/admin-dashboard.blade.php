<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg">
                @isset($mainNav)
                    {{ $mainNav }}
                @endisset
                @isset($countryNav)
                    {{ $countryNav }}
                @endisset
                <div class="p-6 bg-white border-b border-gray-200 bg h-auto ">
                    @isset($content)
                        {{ $content }}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
