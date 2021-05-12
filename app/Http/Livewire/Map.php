<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Map extends Component
{
    public $longtiude;
    public $latitude;
    public $zoomLevel;



    // for country Popups
    public $mapType;
    public $POIS;
    public $restaurants;
    public $hotels;

    
    public function render()
    {
        return view('livewire.map');
    }
}
