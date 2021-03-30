<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'hotel_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'hotel_id');
    }
}