<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'is_admin',
        'status',
        'username',
        'confirmId',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function roles() {
        return $this->hasMany('App\Role');
    }

    public function adminLog() {
        return $this->hasMany('App\AdminLog');
    }

    public function isAdmin() {
        return $this->is_admin === 1;
    }

    public function isSuperAdmin() {
        return $this->is_admin === 2;
    }

    public function isAllowCenterEditor() {
        if($this->isSuperAdmin()) {
            return true;
        }
        foreach($this->roles as $role) {
            if($role->role_name == 'CenterEditor' && $role->status == 1) {
                return true;
            }
        }
        return false;
    }
    public function isAllowClientManager() {
        if($this->isSuperAdmin()) {
            return true;
        }
        foreach($this->roles as $role) {
            if($role->role_name == 'ClientManager' && $role->status == 1) {
                return true;
            }
        }
        return false;
    }
    public function isAllowPriceEditor() {
        if($this->isSuperAdmin()) {
            return true;
        }
        foreach($this->roles as $role) {
            if($role->role_name == 'PriceEditor' && $role->status == 1) {
                return true;
            }
        }
        return false;
    }
    public function isAllowChecklistEditor() {
        if($this->isSuperAdmin()) {
            return true;
        }
        foreach($this->roles as $role) {
            if($role->role_name == 'ChecklistEditor' && $role->status == 1) {
                return true;
            }
        }
        return false;
    }
}
