<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg bg">
                <x-admins.dashboard-nav-links />
                <div class="p-6 bg-white border-b border-gray-200 bg h-auto ">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

