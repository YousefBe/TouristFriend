<?php

namespace App\Models;

use App\Models\City;
use App\Models\Favourite;
use App\Models\PointOfInterest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function pointsOfInterest()
    {
        return $this->hasMany(PointOfInterest::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
    public function favourites()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }

    public function homePageImage()
    {
        $image = $this->images()->limit(1)->pluck('file_name')->implode('');
        return 'storage/countries/' . $image;
    }
}