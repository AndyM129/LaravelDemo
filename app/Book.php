<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn', 'author', 'title', 'category_id', 'price', 'description',
    ];
}
