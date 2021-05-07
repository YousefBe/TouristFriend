<?php

namespace App\Http\Livewire\Admins;

use App\Models\City;
use App\Models\Image;
use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CountryCities extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $name;
    public $longtiude;
    public $latitude;
    public $details;
    public $weather;
    public $country;
    public $newphotos;
    public $currentCity;
    public $cityImages;

    protected $rules = [
        'name' => 'required',
        'longtiude' => 'required',
        'latitude' => 'required',
        'details' => 'required',
        'weather' => 'required',
    ];


    public function storeModal()
    {
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'weather']);
        $this->resetValidation();
    }

    public function store()
    {
        $data = $this->validate();
        $city = $this->country->cities()->create($data);
        $this->handleImages($city);
        $this->dispatchBrowserEvent('close-modal');
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'weather']);
    }
    public function updateModal($id)
    {
        $city = City::find($id);
        $this->currentCity = $city;
        $this->name = $city->name;
        $this->longtiude = $city->longtiude;
        $this->latitude = $city->latitude;
        $this->details = $city->details;
        $this->weather = $city->weather;
    }
    public function update()
    {
        $data = $this->validate();
        $this->currentCity->update($data);
        $this->handleImages($this->currentCity);
        $this->dispatchBrowserEvent('close-modal');
    }
    public function DeleteImage($id)
    {
        $image = Image::find($id);
        $image->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function Delete($id)
    {
        $city = City::find($id);
        $city->images()->delete();
        $city->delete();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function cityImages($id)
    {
        $city = City::find($id);
        $this->cityImages = $city->images;
    }

    private function handleImages($city)
    {
        if (!empty($this->newphotos)) {
            $this->validate([
                'newphotos.*' => 'image',
            ]);
            foreach ($this->newphotos as $photo) {
                $city->images()->create(['file_name' => $photo->hashName()]);
                $photo->store('public/cities');
            }
        }
    }

    public function render()
    {
        $countryCities = $this->country->cities()->paginate(5);
        return view(
            'livewire.admins.country-cities',
            ['countryCities' => $countryCities]
        );
    }
}