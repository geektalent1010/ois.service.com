<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'country',
        'city',
        'key',
        'flag',
        'address',
        'postal',
        'phone',
        'email',
        'providedby',
        'working_time',
        'working_days',
        'location',
        'type',
    ];

    public function checklists(): HasMany
    {
        return $this->hasMany('App\Checklist');
    }
}
