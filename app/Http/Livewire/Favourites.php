<?php

namespace App\Http\Livewire;

use App\Models\Favourite;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

class Favourites extends Component
{

    public $userFavsRouteNames;
    public $routeWithModelId;
    public $favIcon;
    public $isFav;
    public $object;

    public function mount()
    {       
        $this->userFavsRouteNames = Auth::user()->favourites->pluck('route_name')->toArray();
        $this->checkIfAlreadyFavourite();
        
    }

    public function checkIfAlreadyFavourite()
    {
        if (in_array($this->routeWithModelId , $this->userFavsRouteNames)) {
            
            $this->isFav= true;
        }else{
            $this->isFav= false;
        }
        $this->checkFavForIcon();
    }

    public function addToFavs()
    {
       if ($this->isFav) {
           $fav = Favourite::where('route_name' , '=' , $this->routeWithModelId)->delete();
           $this->isFav =  false;
       }else{
          $this->object->favourites()->create([
               'route_name' =>  $this->routeWithModelId ,
               'user_id' => Auth::user()->id
           ]);
           $this->isFav =  true;
       }
       $this->checkFavForIcon();
    }

    public function checkFavForIcon()
    {
        if ($this->isFav) {
            $this->favIcon= 'images/fav.png';
        }else{
            $this->favIcon= 'images/notFav.png';
        }
    }


    public function render()
    {
        return view('livewire.favourites');
    }
}
