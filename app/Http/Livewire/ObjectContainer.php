<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ObjectContainer extends Component
{
    public $collection;
    public $type;
    public $header;
    public $singleItemRoute;
    public $itemListRoute;
    public $text;
    public $setItemLocation = false;

    public function mount()
    {
        $this->header = 'Discover Your Next Destination ..';
        $this->text = 'a list of our most viewd {{$type}}';
        if ($this->type === 'countries') {
            $this->text = 'among our supported countries and cities , a sample of out supported countries .. ';
            $this->singleItemRoute = 'user.country';
            $this->itemListRoute = 'user.countries';
        }else if($this->type === 'cities'){
            $this->setItemLocation = true;
            $this->text = 'a list of our most viewd cities ';
            $this->singleItemRoute = 'user.city';
            $this->itemListRoute = 'user.cities';
        }else if($this->type === 'hotels'){
            $this->setItemLocation = true;
            $this->text = 'a list of our supported rated hotels';
            $this->singleItemRoute = 'user.hotel';
            $this->itemListRoute = 'user.hotels';
        }else if($this->type === 'pois'){
            $this->setItemLocation = true;
            $this->text = 'a list of ourPoinnt of interest locations';
            $this->singleItemRoute = 'user.poi';
            $this->itemListRoute = 'user.pois';
        }else if($this->type === 'restaurants'){
            $this->setItemLocation = true;
            $this->text = 'a list of our supported ,  top rated restaurants ';
            $this->singleItemRoute = 'user.restaurant';
            $this->itemListRoute = 'user.restaurants';
        }
    }
    public function render()
    {
        return view('livewire.object-container');
    }
}
