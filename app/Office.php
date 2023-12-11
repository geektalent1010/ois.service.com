<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'country',
        'city',
        'address',
        'postal',
        'phone',
        'email',
        'providedby',
    ];
}
