<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Favourite;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class FavouritesList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.favourites-list' , [
            'favourites' => Favourite::where('user_id' , '=' , Auth::user()->id)->paginate(3)
        ]);
    }
}
