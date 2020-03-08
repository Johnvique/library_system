<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedBooks extends Model
{
    //
    protected $fillable =[
        'reg_no',
        'book_name',
        'isbn',
        'date_borrowed'
    ];
}
