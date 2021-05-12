<?php

namespace App\Http\Livewire\User;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reviews extends Component
{
    // send object "model" to be reviewd , like we did with the country cities
    // send masln $coubtry->reviews , so that we can create the review directly 
    public $objectToBeReviewd;
    public $objectReviews;
 
 
    public $rate;
    public $title;
    public $body;

    public $objectReviewrsIds;
    public $selectedStars = 0;
    public $totalStars = 6;

    public function mount($objectToBeReviewd)
    {
        // id of users whom already reviewd the obj
        $this->objectReviewrsIds =$objectToBeReviewd->reviews()->pluck('user_id')->toArray();
        // dd($this->objectReviews->first()->user->details);
    }
    public function setStars($number)
    {
        $this->selectedStars = $number;
        $this->rate = $number;
    }

    public function store()
    {
        $this->objectToBeReviewd->reviews()->create(['title'=> $this->title , 'body'=> $this->body , 'rate'=> $this->rate , 'likes'=> 1 , 'dislikes'=>2 ,'user_id'=>Auth::user()->id]);
        $this->emit('reviewAdded');

    }
    
    // public function checkIfUserReviewd()
    // {
        // in_array(Auth::user()->id , $this->objectReviewrsIds)
    // }


    public function render()
    {
        return view('livewire.user.reviews' , ['reviews' => Review::where('reviewable_id' , '=' , $this->objectToBeReviewd->id)->get()]);
    }
}