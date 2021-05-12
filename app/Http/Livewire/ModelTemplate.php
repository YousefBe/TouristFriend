<?php

namespace App\Http\Livewire;

use Livewire\Component;


class ModelTemplate extends Component
{
   
    // GOLBALS
    public $object;
    public $type;
    public $imagesFolder;
    public $longtiude;
    public $latitude;
    public $name;
    public $objectImages;
    public $details;
    public $weather;
    public $zoomLevel;


    
    // Countries
    public $placeLocation;
    public $POI;
    public $cities;
    public $restaurants;
    public $hotels;
    public $population;
    public $currency;
    public $budget;

    public function mount($type , $object)
    {
        $this->object = $object;
        $this->type = $type;
        $this->name = $object->name;
        $this->longtiude = $object->longtiude;
        $this->latitude = $object->latitude;
        $this->objectImages =$object->images;
        $this->details = $object->details;

        if ($type === 'country') {
            $this->imagesFolder = 'countries';
            $this->zoomLevel = 5;
            $this->placeLocation = $object->contnent;
            $this->POI = $object->pointsOfInterest;
            $this->cities = $object->cities;
            $this->restaurants = $object->restaurants;
            $this->hotels = $object->hotels;
            $this->population =$object->population;
            $this->currency =$object->currency;
            $this->weather =$object->weather;
            $this->budget =$object->budget;
        } elseif ($type === 'city') {
            $this->imagesFolder = 'cities';
            $this->zoomLevel = 12;
            $this->placeLocation = $object->country->name;
            $this->weather =$object->weather;
            
        }
    }



    public function render()
    {
        return view('livewire.model-template');
    }
}
