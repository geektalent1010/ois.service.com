<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Country;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        $user = auth()->guard('admin')->user();
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::where('active', 1)
            ->where('phone_code', '<>', 0)
            ->orderBy('phone_code', 'asc')
            ->select('phone_code')
            ->distinct()
            ->get()
            ->pluck('phone_code')
            ->all();
        return view('admin.profile.index')
            ->with('user', $user)
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes);
    }
}
