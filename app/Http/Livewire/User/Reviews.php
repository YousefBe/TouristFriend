<?php

namespace App\Http\Livewire\User;

use App\Models\Like;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reviews extends Component
{
    // send object "model" to be reviewd , like we did with the country cities
    // send masln $coubtry->reviews , so that we can create the review directly 
    public $objectToBeReviewd;
    public $userId ;

    public $rate = 0;
    public $title;
    public $body;
    public $type;

    public $objectReviewrsIds;
    public $reviewToBeUpdated;
    public $userReviewdThisObject;
    public $totalStars = 6;
    public $selectedStars = 0;
    public $updating = false;


    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'rate' => 'required',
    ];
    public function mount()
    {
        $this->userId = Auth::user()->id;
        $this->checkIfUserReviewd();
    }

    public function checkIfUserReviewd()
    {
        // id of users whom already reviewd the obj
        $this->objectReviewrsIds = $this->objectToBeReviewd->reviews()->pluck('user_id')->toArray();
        if (in_array($this->userId, $this->objectReviewrsIds)) {
            $this->userReviewdThisObject = true;
        }else{
            $this->userReviewdThisObject = false;
        };
    }


    public function setStars($number)
    {
        $this->rate = $number;
    }

    public function store()
    {
        $data= $this->validate();
        $data['user_id']= $this->userId;
        $this->objectToBeReviewd->reviews()->create($data);
        $this->userReviewdThisObject = true;
    }
       
    public function editReview($review)
    {
        $this->emit('updatingAreview');
        $this->updating = true;
        $this->reviewToBeUpdated= Review::find($review);
        $this->body = $this->reviewToBeUpdated->body;
        $this->title = $this->reviewToBeUpdated->title;
        $this->selectedStars = $this->reviewToBeUpdated->rate;

        $this->userReviewdThisObject = false;
    }

    public function update()
    {
        $data = $this->validate([
            'title' => 'sometimes',
            'body' => 'sometimes',
            'rate' => 'sometimes'
        ]);
        $data['user_id']= $this->userId;
       $this->reviewToBeUpdated->update($data);
       $this->userReviewdThisObject = true;
    }

    public function cancelUpdating()
    {
        $this->userReviewdThisObject = true;
        $this->updating= false;
        $this->rate=0;
        $this->body='';
        $this->title='';
    }

    public function deleteReview($review)
    {
        $reviewTobeDeleted= Review::find($review)->delete();
        // \dd($reviewTobeDeleted);
        $this->userReviewdThisObject = false;
    }
    public function likeReview($id)
    {
        $this->toggleLikeOrDislike($id , 1);
        
    }
    public function DisLikeReview($id)
    {
        $this->toggleLikeOrDislike($id , 0);
        
    }

    private function toggleLikeOrDislike($id , $isLike)
    {
        $review =  Review::find($id);
        $userReviewLike =$review->likes()
        ->where('user_id' , '=' , $this->userId);

        $like = $userReviewLike->get();

        // if i already diliked and  iwant to like , first i will have to delete the dislike , 
        // then i will like

        // this means i already reacted to this review 
        if ($like->count() > 0) {
            $userReviewLike->delete();
            //when i try to like but i already disliked
            if ($like->first()->is_like !== $isLike) {
                $like = Like::create([
                    'user_id' => Auth::user()->id , 
                    'is_like' => $isLike ,
                    'review_id' => $id
                ]);
            }
        }else{
            $like = Like::create([
                'user_id' => Auth::user()->id , 
                'is_like' => $isLike ,
                'review_id' => $id
            ]);
        }
    }
    public function render()
    {
        return view('livewire.user.reviews', ['reviews' => Review::where('reviewable_id', '=', $this->objectToBeReviewd->id)->where('reviewable_type' , '=' , $this->type)->get()]);
    }
}
