<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Country as CountryModel;
class Country extends Component
{

    public $country;
    public function mount($id)
    {
        $this->country = CountryModel::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.user.country');
    }
}
