<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'body',
        'rate',
    ];

    // review belongs for a user 
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // and one of those
    public function coutry()
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

    use HasFactory;
}