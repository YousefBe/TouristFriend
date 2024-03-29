<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class CountryFeature extends Component
{
    use WithPagination;

    public $CountryId;

    public $icon;
    public $type;
    public $routeName;

    public function mount($type)
    {
        // \dd($this->CountryId);
        $this->type = $type;
        if ($type === 'cities') {
            $this->icon = 'fas fa-building';
            $this->routeName = 'user.city';
        }elseif ($type === 'hotels') {
            $this->icon = 'fas fa-h-square';
            $this->routeName = 'user.hotel';
        }elseif ($type === 'restaurants') {
            $this->routeName = 'user.restaurant';
            $this->icon = 'fas fa-utensils'; 
        }elseif($type === 'points of interest'){
            $this->routeName = 'user.poi';
        }
    }

    public function render()
    {
        // i don't think that this is the best approach
        // but i changed  it so we can paginate data
        $country =Country::find($this->CountryId);
        if ( $this->type === 'cities') {
            $countryObjects = $country->cities()->paginate(8);
        }elseif ( $this->type === 'hotels') {
            $countryObjects = $country->hotels()->paginate(8);
        }elseif ( $this->type === 'restaurants') {
            $countryObjects = $country->restaurants()->paginate(8);
        }else if ($this->type === 'points of interest'){
            $countryObjects = $country->pointsOfInterest()->paginate(8);
        }
        return view('livewire.country-feature' , ['collection'=> $countryObjects]);
    }
}
