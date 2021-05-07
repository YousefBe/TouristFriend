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



    // Countries
    public $contnent;
    public $POI;
    public $restaurants;
    public $hotels;

    public function mount($type , $object)
    {
        $this->object = $object;
        $this->type = $type;
        $this->name = $this->object->name;
        $this->longtiude = $this->object->longtiude;
        $this->latitude = $this->object->latitude;
        $this->objectImages =$object->images;

        if ($type === 'country') {
            $this->imagesFolder = 'countries';
            $this->contnent = $object->contnent;
            $this->details = $object->details;
            $this->POI = $object->pointsOfInterest()->select('longtiude' , 'latitude' , 'name')->get();
            $this->restaurants = $object->restaurants()->select('longtiude' , 'latitude' , 'name')->get();
            $this->hotels = $object->hotels()->select('longtiude' , 'latitude' , 'name')->get();
            $this->weather =preg_replace("/&#?[a-z0-9]+;/i","",$object->weather) ;
        }
    }



    public function render()
    {
        return view('livewire.model-template');
    }
}
