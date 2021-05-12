<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CountryFeature extends Component
{
    public $collection;
    public $imageFolder;

    public $icon;
    public $type;

    public function mount($type)
    {
        $this->type = $type;
        if ($type === 'cities') {
            $this->icon = 'fas fa-building';
        }elseif ($type === 'hotels') {
            $this->icon = 'fas fa-h-square';
        }elseif ($type === 'restaurants') {
            $this->icon = 'fas fa-utensils';
            
        }
    }

    public function render()
    {
        return view('livewire.country-feature');
    }
}
