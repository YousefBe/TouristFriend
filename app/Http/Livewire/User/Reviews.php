<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Reviews extends Component
{
    // send object "model" to be reviewd , like we did with the country cities
    // send masln $coubtry->reviews , so that we can create the review directly 
    public $objectToBeReviewd;

    public $selectedStars = 0;
    public $totalStars = 6;

    public function setStars($number)
    {
        $this->selectedStars = $number;
    }


    public function render()
    {
        return view('livewire.user.reviews');
    }
}