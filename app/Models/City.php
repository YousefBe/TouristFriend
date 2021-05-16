<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favourite;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class City extends Model implements Searchable
{
    use HasFactory;
    protected $guarded = [];
    public function getSearchResult(): SearchResult
     {
        $url = route('user.city', $this->id);
     
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
        return  'storage/cities/' . $image;
    }

    public function favourite()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }
}