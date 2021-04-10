<div x-data="{row : false}" x-cloak>
    <div class="flex justify-end">
       <x-modal>
           <x-slot name="triggerName">Create a User</x-slot>
           <x-slot name="title">Create a new User</x-slot>
           <x-slot name="content">{{$name}}</x-slot>
           <x-slot name="ActionName">create</x-slot>
       </x-modal>
    </div>
   <div class="text-gray-900 bg-white">
      <div class="flex justify-center">
          <table class="w-full text-md bg-white shadow-md rounded mb-4">
              <tbody>
                  <tr class="border-b relative">
                      <th class="text-left p-3 px-5">Name</th>
                      <th class="text-left p-3 px-5 hidden sm:table-cell">Email</th>
                      <th class="text-left p-3 px-5 hidden sm:table-cell">Role</th>
                      <th class=""></th>
                  </tr>
                  @foreach ($users as $user)
                    <tr class="border-b hover:bg-orange-100 " :class="{'bg-gray-100' : '{{$loop->index % 2 == 0}}'}">
                        <td class="p-3 px-5 w-64">
                            <p class=" text-base tracking-wider font-semibold">{{$user->name}}
                            @if (Auth::user()->id == $user->id)
                                <span class=" text-base text-red-500 inline">(me)</span>
                            @endif
                            
                            </p>
                        </td>
                        <td class="p-3 px-5  w-64">
                            <p class=" text-base tracking-wider font-semibold hidden sm:table-cell">{{$user->email}}</p>
                        </td>
                        <td class="p-3 px-5">
                            <p class=" text-base tracking-wider font-semibold hidden sm:table-cell">
                                @if ($user->roles()->first())
                                {{$user->roles()->first()->display_name}}</p>
                                @else
                                No roles yet                           
                                @endif
                        </td>
                        <td class="p-3 px-5 flex justify-end">
                            <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" wire:click="save({{$user->id}})">Update</button>
                            <button type="button" class="mr-3 text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" wire:click="view({{$user->id}})">view</button>
                            <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        </td>
                    </tr>
                  @endforeach
              
              </tbody>
          </table>
          
      </div>
      {{$users->links()}}
  </div>
</div>
