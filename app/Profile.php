<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'country_id',
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'phone_number',
        'street',
        'house_number',
        'postal_code',
        'city',
        'country_center',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }
}
