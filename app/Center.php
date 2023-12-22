<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Center extends Model
{
    protected $fillable = [
        'name',
        'city',
        'country',
        'phone_number',
        'postal_code'
    ];

    public function checklists(): HasMany
    {
        return $this->hasMany('App\Checklist');
    }
}
