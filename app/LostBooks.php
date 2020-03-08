<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LostBooks extends Model
{
    //
    protected $fillable = [
        'reg_no',
        'book_name',
        'isbn',
        'date_lost',
        'date_returned'
    ];
}
