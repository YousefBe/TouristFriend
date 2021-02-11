<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'restaurant_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'restaurant_id');
    }
}