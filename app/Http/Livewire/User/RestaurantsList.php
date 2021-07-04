<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithPagination;

class RestaurantsList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.restaurants-list' ,['restaurants' => Restaurant::paginate(6)]);
    }
}
