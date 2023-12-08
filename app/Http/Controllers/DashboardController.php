<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::check()) {
            return view ('dashboard.index');
        } else {
            return view ('dashboard.guest');
        }

    }
}
