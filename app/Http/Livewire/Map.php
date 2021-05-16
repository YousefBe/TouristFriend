<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Map extends Component
{

    protected $listeners = ['resultsAreFound'];

    public $longtiude;
    public $latitude;
    public $zoomLevel;
    public $eta;
    public $distanceTraveledInKms;


    // for country Popups
    public $mapType;
    public $POIS;
    public $restaurants;
    public $hotels;
    public $cities;
    // wire modeled 
    public $hotelLocation;
    // wired in countries page , else its not
    public $endPos;
    public $destination;
    public $results;


    // when we create a route its either from a hotel to any location  (in the country page) so the user choses both locations
    public function createRoute()
    {
        if ($this->mapType !== 'country' && $this->mapType !== 'hotel') {
            $this->endPos=trim($this->destination->longtiude).','.trim($this->destination->latitude);
            // dd($this->endPos);
        }
        // \dd($this->hotelLocation);
        $this->emit('createRoute',['startPos'=> $this->hotelLocation , 'endPos'=>$this->endPos]);
    }

    //when user choses a location 
    public function resultsAreFound($distance , $ETA)
    {
        $this->distanceTraveledInKms = $distance/1000;
        $this->eta = $ETA;
        // \dd($this->distanceTraveledInKms , $this->eta);
        $this->results = true;
    }
    public function render()
    {
        return view('livewire.map');
    }
}
