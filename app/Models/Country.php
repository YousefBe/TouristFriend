<?php

namespace App\Models;

use App\Models\City;
use App\Models\PointOfInterest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

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
        return $this->hasMany(Hotel::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'country_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'country_id');
    }
}