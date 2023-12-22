<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checklist extends Model
{
    protected $fillable = [
        'center_id',
        'visa_type',
        'title',
        'description',
        'file_name'
    ];

    public function center(): BelongsTo
    {
        return $this->belongsTo('App\Center');
    }
}
