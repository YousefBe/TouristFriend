<?php

namespace App\Http\Livewire\User;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CitiesList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.cities-list' , ['cities'=> City::paginate(6)]);
    }
}
