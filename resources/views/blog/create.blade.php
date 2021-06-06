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
                     Create Post 
                </div>
                
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="w-4/5 m-auto pt-20">
        <form 
            action="/blog"
            method="POST"
            enctype="multipart/form-data"
            >
            @csrf

            <label class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="title">Title</label>
            <input 
                type="text"
                name="title"
                placeholder="Title..."
                class="bg-transperant block border-b-2 w-full h-20 text-6xl outline-none" >
                <label  class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="file">Upload Post Image</label>
                <input type="file" name="file" required>
                <label class="bg-transperant block border-b-2 w-full h-20 text-5xl outline-none" for="channel">Channel</label>
                <select name="channel" required>
                    <option >--Select Channel--</option>

                    @foreach ($channels as $channel)
                    <option value="{{ $channel->id }}" >{{ $channel->name }}</option>

                    @endforeach
                </select>

                <textarea 
                    name="description"
                    placeholder="Description..."
                    class="py-20 bg-transperant block border-b-2 w-full h-60 text-xl outline-none"
                    ></textarea>
                    <br>
                    <button 
                    type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Submit Post
                    </button>



        </form>
    </div>
</x-app-layout>
