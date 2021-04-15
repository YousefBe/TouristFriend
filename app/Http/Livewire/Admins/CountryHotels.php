<?php

namespace App\Http\Livewire\Admins;

use App\Models\Hotel;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CountryHotels extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $name;
    public $longtiude;
    public $latitude;
    public $details;
    public $rate;
    public $price;
    public $country;
    public $newphotos;
    public $currentHotel;
    public $HotelImages;

    protected $rules = [
        'name' => 'required',
        'longtiude' => 'required',
        'latitude' => 'required',
        'details' => 'required',
        'rate' => 'required',
        'price' => 'required',
    ];

    public function storeModal()
    {
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'rate', 'price']);
        $this->resetValidation();
    }

    public function store()
    {
        $data = $this->validate();
        $hotel = $this->country->hotels()->create($data);
        $this->handleImages($hotel);
        $this->dispatchBrowserEvent('close-modal');
        $this->reset(['name', 'longtiude', 'latitude', 'details', 'rate', 'price']);
    }
    public function updateModal($id)
    {
        $hotel = Hotel::find($id);
        $this->currentHotel = $hotel;
        $this->name = $hotel->name;
        $this->longtiude = $hotel->longtiude;
        $this->latitude = $hotel->latitude;
        $this->rate = $hotel->rate;
        $this->details = $hotel->details;
        $this->price = $hotel->price;
        // $this->currentphotos = $country->images()->pluck('file_name');
    }
    public function update()
    {
        $data = $this->validate();
        $this->currentHotel->update($data);
        $this->handleImages($this->currentHotel);
        $this->dispatchBrowserEvent('close-modal');
    }
    public function DeleteImage($id)
    {
        $image = Image::find($id);
        $image->delete();
    }

    public function Delete($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function HotelImages($id)
    {
        $Hotel = Hotel::find($id);
        $this->HotelImages = $Hotel->images;
    }
    private function handleImages($hotel)
    {
        if (!empty($this->newphotos)) {
            $this->validate([
                'newphotos.*' => 'image',
            ]);
            foreach ($this->newphotos as $photo) {
                $hotel->images()->create(['file_name' => $photo->hashName()]);
                $photo->store('public/hotels');
            }
        }
    }

    public function render()
    {
        $countryHotels = $this->country->hotels()->paginate(5);
        return view('livewire.admins.country-hotels', [
            'countryHotels' => $countryHotels
        ]);
    }
}
