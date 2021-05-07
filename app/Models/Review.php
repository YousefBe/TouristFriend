<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    // review belongs for a user 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviewable()
    {
        return $this->morphTo();  
    }
    use HasFactory;
}