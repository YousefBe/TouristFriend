<?php

namespace App\Http\Livewire\User;

use App\Models\Restaurant as ModelsRestaurant;
use Livewire\Component;

class Restaurant extends Component
{
    public $restaurant;
    public function mount($id)
    {
        $this->restaurant = ModelsRestaurant::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.user.restaurant');
    }
}
