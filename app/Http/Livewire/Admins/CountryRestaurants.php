<?php

namespace App\Http\Livewire\Admins;

use App\Models\Image;
use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CountryRestaurants extends Component
{
    public $country;
    public $name;
    public $longtiude;
    public $latitude;
    public $details;
    public $rate;
    public $newphotos;
    public $currentRest;
    public $restcaurantImages;

    use WithFileUploads;
    use WithPagination;

    protected $rules = [
        'name' => 'required',
        'longtiude' => 'required',
        'latitude' => 'required',
        'details' => 'required',
        'rate' => 'required',
    ];

    public function storeModal()
    {
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'rate']);
        $this->resetValidation();
    }

    public function store()
    {
        $data = $this->validate();
        $restaurant = $this->country->restaurants()->create($data);
        $this->handleImages($restaurant);
        $this->dispatchBrowserEvent('close-modal');
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'rate']);
    }
    public function updateModal($id)
    {
        $res = Restaurant::find($id);
        $this->currentRest = $res;
        $this->name = $res->name;
        $this->longtiude = $res->longtiude;
        $this->latitude = $res->latitude;
        $this->rate = $res->rate;
        $this->details = $res->details;
    }
    public function update()
    {
        $data = $this->validate();
        $this->currentRest->update($data);
        $this->handleImages($this->currentRest);
        $this->dispatchBrowserEvent('close-modal');
    }

    public function Delete($id)
    {
        $res = Restaurant::find($id);
        $res->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function restcaurantImages($id)
    {
        $res = Restaurant::find($id);
        $this->restcaurantImages = $res->images;
    }
    public function DeleteImage($id)
    {
        $image = Image::find($id);
        $image->delete();
        $this->dispatchBrowserEvent('close-modal');
    }

    private function handleImages($res)
    {
        if (!empty($this->newphotos)) {
            $this->validate([
                'newphotos.*' => 'image',
            ]);
            foreach ($this->newphotos as $photo) {
                $res->images()->create(['file_name' => $photo->hashName()]);
                $photo->store('public/resturants');
            }
        }
    }

    public function render()
    {
        $countryRestuarants = $this->country->restaurants()->paginate(5);
        return view('livewire.admins.country-restaurants', ['countryRestuarants' => $countryRestuarants]);
    }
}