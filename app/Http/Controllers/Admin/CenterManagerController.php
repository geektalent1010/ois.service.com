<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CenterManagerController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        return view('admin.center.index')
            ->with('countries', $countries);
    }
}
