<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $roles = [
            'clientManager' => 0,
            'priceEditor' => 0,
            'checklistEditor' => 0,
            'centerEditor' => 0,
            'adminManager' => 0,
            'mailManager' => 0,
            'contentEditor' => 0,
        ];
        if(Auth::guard('admin')->user()->isSuperAdmin()) {
            $roles['clientManager'] = 1;
            $roles['priceEditor'] = 1;
            $roles['checklistEditor'] = 1;
            $roles['centerEditor'] = 1;
            $roles['adminManager'] = 1;
            $roles['mailManager'] = 1;
            $roles['contentEditor'] = 1;
        } else {
            foreach(Auth::guard('admin')->user()->roles as $role) {
                if($role->role_name == 'ClientManager') {
                    $roles['clientManager'] = $role->status;
                }
                if($role->role_name == 'CenterEditor') {
                    $roles['centerEditor'] = $role->status;
                }
                if($role->role_name == 'PriceEditor') {
                    $roles['priceEditor'] = $role->status;
                }
                if($role->role_name == 'ChecklistEditor') {
                    $roles['checklistEditor'] = $role->status;
                }
            }
        }
        return view("dashboard.admin")
            ->with('roles', $roles);
    }
}
