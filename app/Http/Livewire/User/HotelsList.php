<?php

namespace App\Http\Livewire\User;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithPagination;

class HotelsList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.hotels-list' , ['hotels' => Hotel::paginate(6)]);
    }
}
