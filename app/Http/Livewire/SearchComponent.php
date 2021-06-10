<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\PointOfInterest;
use App\Models\Restaurant;
use Livewire\Component;
use Spatie\Searchable\Search;

class SearchComponent extends Component
{
    public $query;
    public function render()
    {
        $searchResults = null;
        if (strlen($this->query) >= 2){
            $searchResults = (new Search())
            ->registerModel(City::class, 'name')
            ->registerModel(Country::class, 'name')
            ->registerModel(Hotel::class, 'name')
            ->registerModel(Restaurant::class, 'name')
            ->registerModel(PointOfInterest::class, 'name')
            ->search($this->query);
        }

        return view('livewire.search-component' , ['searchResults' => $searchResults]);
    }
}
