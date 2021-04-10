<div x-data="{open :false}">
  <div class="">
    <button @click="open = true" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
        {{$triggerName}}
    </button>
  </div>
  
  <!-- overlay -->
  <div  class="absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-center pt-10 md:pt-0 z-40" x-show="open" @click.self="open = false" >
  
  <!-- modal -->
  <div id="modal" class="pacity-0 transform relative w-10/12 md:w-1/2 h-3/4 bg-white rounded 
    shadow-lg duration-300" >
  
    <!-- button close -->
    <button 
    @click="open = false"
    class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
    &cross;
    </button>
  
    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200">
    <h2 class="text-xl font-semibold text-gray-600">{{$title}}</h2>
    </div>
  
    <!-- body -->
    <div class="w-full p-3 overflow-y-auto max-h-96 " >
        @isset($content)
          {{$content}}
        @endisset
    </div>
  
    <!-- footer -->
    <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
      <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none"
          wire:click="{{$ActionName}}">
        {{$ActionName}} 
      </button>
      <button 
          @click="open = false"
          class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none"
      >Close
      </button>
    </div>
  </div>
  
  </div>
  
  
</div>