<div x-data="{open  : false}">
  {{-- button to fire the modal --}}
  <div @click="open = true" class="mt-4">
    {{$trigger}}
  </div>

  {{-- backdrop --}}
  <div class="inset-0	 w-full h-full fixed  bg-gray-400  opacity-40 z-20 "  x-show="open" @click="open = false"></div>

  <div class="flex items-center justify-center">
    
    
    <div class="fixed z-50  rounded-2xl  bg-white  top-40 pt-0   w-4/5   lg:w-2/5   modal  shadow-2xl"  x-show="open">
      
      {{-- title --}}
        <div  class=" px-12  py-8  border-b-2  bg-gray-100 shadow rounded  w-full flex">
          <h1 class="text-2xl  font-extrabold capitalize">{{$title}}</h1>
        </div>
      {{-- content --}}
        <div class="px-12 py-8 text-xl font-semibold leading-3 ">
          
          {{$content}}
        </div>
      {{-- acions --}}
        <div class="flex justify-end items-center absolute w-full bottom-0 px-14 py-10 h-28  bg-gray-100 rounded-md ">
          @if ($href)
          <a href="{{route($href, $actionId)}}" @click="open = false"  class=" px-3 py-4   w-auto text-center bg-green-500 mr-6  rounded-xl text-white  transition ease-out duration-500 hover:bg-white hover:text-green-500 text-xl capitalize active:bg-gray-900 shadow-md">Confirm</a>
          @endif
          <a href="" @click.prevent="open = false" class=" px-3 py-4   w-auto text-center bg-red-500  rounded-xl text-white transition ease-out duration-500 hover:bg-white hover:text-red-500 text-xl capitalize active:bg-gray-900 shadow-md">Close</a>
        </div>
    </div>

  </div>

</div>