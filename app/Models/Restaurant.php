<?php

namespace App\Models;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model implements Searchable
{
    use HasFactory;
    protected $guarded = [];
    public function getSearchResult(): SearchResult
    {
       $url = route('user.restaurant', $this->id);
    
        return new SearchResult(
           $this ,
           $this->name,
           $url
        );
    }

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
    public function favourites()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }

    public function homePageImage()
    {
        $image = $this->images()->limit(1)->pluck('file_name')->implode('');
        return  'storage/resturants/'. $image;
    }
}