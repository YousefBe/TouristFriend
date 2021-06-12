<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jcc\LaravelVote\Traits\Votable;


class Post extends Model
{
    use HasFactory;
    use Votable;


    protected $fillable = ['title','body',"file_path",'user_id','channel_id','vote'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}