<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceRegister extends Model
{
    //
    protected $fillable = [
        'username',
        'Id_No',
        'visit_day',
        'image',
        'book_required',
        'purpose'
    ];
}
