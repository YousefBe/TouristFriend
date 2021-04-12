<div x-data="{open :false}" x-cloak @close-modal.window="open = false" {{ $attributes }}>
    <div class="" @click="open = true">
        {{ $trigger }}
    </div>

    <!-- overlay -->
    <div class="inset-0 bg-black bg-opacity-30 fixed h-screen w-full flex justify-center items-center pt-10 md:pt-0 z-40"
        x-show.transition.duration.200="open" @click.self="open = false">

        <!-- modal -->
        <div id="modal" class="pacity-0 transform relative w-10/12 md:w-1/2 h-3/4 bg-white rounded 
      shadow-lg">

            <!-- button close -->
            <button @click="open = false"
                class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                &cross;
            </button>

            <!-- header -->
            <div class="px-4 py-3 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-600">{{ $title }}</h2>
            </div>

            <!-- body -->
            <div class="w-full p-3 overflow-y-auto max-h-96  overflow-x-hidden ">
                @isset($content)
                    {{ $content }}
                @endisset
            </div>

            <!-- footer -->
            <div
                class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
                @isset($Action)
                    {{ $Action }}
                @endisset
                <button @click="open = false"
                    class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none">Close
                </button>
            </div>
        </div>

    </div>


</div>
