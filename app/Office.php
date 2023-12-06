<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
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

    // public function user() {
    //     return $this->belongsTo('App\User');
    // }
}
