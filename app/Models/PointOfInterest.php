<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointOfInterest extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'point_id');
    }
    public function reviews()
    {
        return $this->hasMany(PointOfInterest::class, 'point_id');
    }
}
