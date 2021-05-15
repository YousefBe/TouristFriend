<?php

namespace App\Http\Livewire\User;

use App\Models\Hotel as ModelsHotel;
use Livewire\Component;

class Hotel extends Component
{
    public $hotel;
    public function mount($id)
    {
        $this->hotel = ModelsHotel::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.user.hotel');
    }
}
