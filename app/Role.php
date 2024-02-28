<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'user_id',
        'role_name',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
