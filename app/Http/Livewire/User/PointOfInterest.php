<?php

namespace App\Http\Livewire\User;

use App\Models\PointOfInterest as ModelsPointOfInterest;
use Livewire\Component;

class PointOfInterest extends Component
{

    public $pos;
    
    public function mount($id)
    {
        $this->pos = ModelsPointOfInterest::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.user.point-of-interest');
    }
}
