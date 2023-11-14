<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    protected $fillable = [
        'country',
        'city',
        'address',
        'email',
        'phone',
        'postal',
        'providedby',
    ];
}
