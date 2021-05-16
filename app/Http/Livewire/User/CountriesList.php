<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class CountriesList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.countries-list' , ['countries' => Country::paginate(6)]);
    }
}
