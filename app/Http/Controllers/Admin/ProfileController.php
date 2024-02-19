<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        $user = auth()->guard('admin')->user();
        // dd(json_encode($user).'\n'.json_encode($user->profile));
        return view('admin.profile.index')
            ->with('user', $user);
    }
}
