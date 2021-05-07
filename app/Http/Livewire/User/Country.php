<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Country as CountryModel;
class Country extends Component
{

    public $country;
    public $countryImages;
    public function mount($id)
    {
        $this->country = CountryModel::findOrFail($id);
        $this->countryImages = $this->country->images;
    }

    public function render()
    {
        return view('livewire.user.country');
    }
}
