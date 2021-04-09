<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
                        <div class="block sm:hidden">
                            <a href="#"
                                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                                @click="open = !open">
                                Topics <svg :class="open ? 'fa-chevron-down': 'fa-chevron-up'"
                                    class="svg-inline--fa fa-chevron-up fa-w-14 ml-2" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-up" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z">
                                    </path>
                                </svg>
                                <!-- <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2 fa-chevron-up"></i> -->
                            </a>
                        </div>
                        <div :class="open ? 'block': 'hidden'"
                            class="w-full flex-grow sm:flex sm:items-center sm:w-auto hidden">
                            <div
                                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                                @foreach ($channels as $channel)
                                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">{{ $channel->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                    @if (session()->has('message'))
                        <div class="w-4/5 m-auto mt-10 pl-2">
                            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                                {{ session()->get('message') }} 
                            </p>
                        </div>
                        
                    @endif
                    @if (Auth::check())
                        <div>
                            <br>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                <a href="/blog/create">
                                    Create Post
                                </a>
                            </button>
                        </div>
                    @endif
                    @foreach ($posts as $post)


                        <article class="flex flex-col shadow my-4">
                            <!-- Article Image -->
                            {{-- <a href="#" class="hover:opacity-75">
                                <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                            </a> --}}
                            <div class="bg-white flex flex-col justify-start p-6">
                                <a href="#"
                                    class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->channel->name }}</a>
                                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                                <p href="#" class="text-sm pb-3">
                                    By <a href="#" class="font-semibold hover:text-gray-800">
                                        {{ $post->user->name }}</a>, Published on
                                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                                </p>
                                <p  class="pb-6">{{ $post->body }}</p>
                                <a href="{{ URL::to('blog/'. $post->id) }}" class="uppercase text-gray-800 hover:text-black">Continue Reading
                                    <!-- <i class="fas fa-arrow-right"></i> -->
                                </a>
                                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user->id)
                                    <span class="float-left">
                                        <a href="{{ URL::to('blog/'. $post->id) .'/edit'}}"
                                            class="teext-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                            Edit
                                        </a>
                                        <form
                                            action="/blog/{{ $post->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class="text-red-500 pl-3"
                                                type="submit">
                                                Delete
                                            </button>

                                    </span>
                                    
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
