<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use Livewire\Component;

class Recommendation extends Component
{
    public $contnents;
    public $weatherOptions;

    public $userBudget;
    public $userContnentChoice;
    public $userWeatherPrefrence;
    public $destinationProp;

    public $userDestinationIsFamousFor= ['shopping', 'beaches', 'Tourist Attractions'];
    
    public $budgetForQuery;
    public $recommendedCountry;
    public $message;

    protected $rules = [
        'userBudget' => 'required|integer|min:1200',
        'userContnentChoice' => 'required',
        'userWeatherPrefrence' => 'required',
        'destinationProp' => 'required',
    ];
    protected $messages = [
        'userBudget.min' => 'The budget can\'t be lower than 1200$',
        'userContnentChoice.required' => 'help us to reduce the choices',
        'userWeatherPrefrence.required' => 'choose a weather you prefer for destination',
    ];

    public function mount()
    {
        $this->contnents = Country::groupBy('contnent')->pluck('contnent')->toArray();
        $this->weatherOptions = Country::groupBy('weather_flag')->pluck('weather_flag')->toArray();
    }

    public function updateduserContnentChoice()
    {
        $this->weatherOptions = Country::where('contnent' , '=' , $this->userContnentChoice)->groupBy('weather_flag')->pluck('weather_flag');
    }

    public function recommend()
    {
        $this->recommendedCountry = null;
        $this->message = '';
        $this->validate();
        $this->checkBudget();

        //perfect match case
        $this->recommendedCountry = Country::where('contnent', '=', $this->userContnentChoice)
        ->where('weather_flag', '=', $this->userWeatherPrefrence)
        ->where('budget_flag', '=', $this->budgetForQuery)
        ->where('known_for' , '=' , $this->destinationProp)
        ->get()->first();
        // dd($this->recommendedCountry);
        
        if ($this->recommendedCountry === null) {
            $this->recommendedCountry = Country::where('contnent', '=', $this->userContnentChoice)
            ->where('weather_flag', '=', $this->userWeatherPrefrence)
            ->where('known_for' , '=' , $this->destinationProp)
            ->get()
            ->first();
            $this->message = 'some of your criteria didn\'t match (budget) , but this was the best option';
        }


        if ($this->recommendedCountry === null) {
            $this->recommendedCountry = Country::where('contnent', '=', $this->userContnentChoice)
            ->where('weather_flag', '=', $this->userWeatherPrefrence)->get()->first();
            $this->message = 'some of your criteria didn\'t match , but this was the best option';
        }
    }
    public function checkBudget()
    {
        if ($this->userBudget < 1500) {
            $this->budgetForQuery = 'low';
        } elseif ($this->userBudget > 1500 && $this->userBudget <= 5000) {
            $this->budgetForQuery = 'medium';
        } else {
            $this->budgetForQuery = 'expensive';
        }
    }

    public function render()
    {
        return view(
            'livewire.user.recommendation',
            [
                'weatherOptions' => $this->weatherOptions
            ]
        );
    }
}
