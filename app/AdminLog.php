<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $table = 'admin_logs';

    protected $fillable = [
        'user_id',
        'action',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
    use HasFactory;
}
