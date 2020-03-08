<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnedBooks extends Model
{
    //
    protected $fillable = [
        'reg_no',
        'book_name',
        'isbn',
        'date_returned'
    ];
}
