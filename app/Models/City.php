<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favourite;
class City extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
    public function homePageImage()
    {
        $image = $this->images()->limit(1)->pluck('file_name')->implode('');
        return  $image;
    }

    public function favourite()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }
}