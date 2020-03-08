<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penalties extends Model
{
    //
    protected $fillable =[
        'name',
        'penalty',
        'reason',
        'date_charged',
        'timeline'
    ];
}
