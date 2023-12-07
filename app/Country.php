<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code',
        'name',
        'phone_code',
        'active'
    ];

    public function profile() {
        return $this->hasOne('profile');
    }
}
