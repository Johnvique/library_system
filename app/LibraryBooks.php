<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryBooks extends Model
{
    //
    protected $fillable=[
        'isbn',
        'book_name',
        'quantity',
        'price',
        'author',
        'image',
        'category'
    ];
}
