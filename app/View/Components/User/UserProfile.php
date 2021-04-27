<?php

namespace App\View\Components\User;

use App\Models\User;
use Illuminate\View\Component;

class UserProfile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $userHasDetials;
    public $firstName;
    public $lastName;
    public $image;
    public $about;
    public $age;
    public $postsCount;
    public $country;
    public $city;
    public $commentsCount;

    public function __construct(User $user)
    {
        if ($user->details) {
            $this->userHasDetials = true;
            $this->firstName = $user->details->first_name;
            $this->lastName = $user->details->lastName;
            $this->image = $user->details->image;
            $this->country = $user->details->country;
            $this->city = $user->details->city;
            $this->about = $user->details->about;
            $this->age = $user->details->age;
        }
        $this->postsCount = $user->posts()->count();
        $this->commentsCount = $user->comments()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user.user-profile');
    }
}