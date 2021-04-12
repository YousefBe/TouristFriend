<?php

namespace App\Http\Livewire\Admins;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Countries extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name;
    public $longtiude;
    public $latitude;
    public $contnent;
    public $details;
    public $weather;
    public $currency;
    public $population;
    public $budget;
    public $budget_flag;
    public $weather_flag;
    public $newphotos = [];
    public $currentphotos = [];

    protected $rules = [
        'name' => 'required|unique:countries',
        'contnent' => 'required',
        'longtiude' => 'required',
        'latitude' => 'required',
        'details' => 'required',
        'weather' => 'required',
        'currency' => 'required',
        'budget' => 'required',
        'population' => 'required',
        'budget_flag' => 'required',
        'weather_flag' => 'required',
    ];

    public function storeModal()
    {
        $this->reset();
        $this->resetValidation();
    }

    public function store()
    {
        $data = $this->validate();
        $country = Country::create($data);

        if (!empty($this->newphotos)) {
            $this->validate([
                'newphotos.*' => 'image',
            ]);
            foreach ($this->newphotos as $photo) {
                $country->images()->create(['file_name' => $photo->hashName()]);
                $photo->store('public/countries');
            }
        }
        $this->dispatchBrowserEvent('close-modal');
        $this->reset();
    }
    public function updateModal($id)
    {
        $country = Country::find($id);
        $this->name = $country->name;
        $this->contnent = $country->contnent;
        $this->longtiude = $country->longtiude;
        $this->latitude = $country->latitude;
        $this->details = $country->details;
        $this->weather = $country->weather;
        $this->currency = $country->currency;
        $this->budget = $country->budget;
        $this->population = $country->population;
        $this->budget_flag = $country->budget_flag;
        $this->weather_flag = $country->weather_flag;
        $this->currentphotos = $country->images()->pluck('file_name');
    }

    public function render()
    {
        return view('livewire.admins.countries', [
            'countries' => Country::paginate(5),
        ]);
    }
}