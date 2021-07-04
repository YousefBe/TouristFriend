<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\PointOfInterest;
use Livewire\WithPagination;

class PoisList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user.pois-list' , ['pois'=> PointOfInterest::paginate(6)]);
    }
}
