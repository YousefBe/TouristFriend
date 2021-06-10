<?php

namespace App\Http\Livewire\User;

use App\Models\City as ModelsCity;
use Livewire\Component;

class City extends Component
{

    public $city;

    public function mount($id)
    {
        $this->city = ModelsCity::findOrFail($id);
    }


    public function render()
    {
        return view('livewire.user.city');
    }
}
