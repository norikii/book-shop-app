<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'author',
        'title',
        'price',
        'qty',
        'cover_img'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
