<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable = ['file_name'];
    use HasFactory;

    public function imageable()
    {
        return $this->morphTo();
    }
}