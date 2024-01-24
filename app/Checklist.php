<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checklist extends Model
{
    protected $fillable = [
        'office_id',
        'visa_type',
        'title',
        'description',
        'file_name'
    ];

    public function office(): BelongsTo
    {
        return $this->belongsTo('App\Office');
    }
}
