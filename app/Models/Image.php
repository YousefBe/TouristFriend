<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable = ['file_name'];
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function point()
    {
        return $this->belongsTo(PointOfInterest::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}