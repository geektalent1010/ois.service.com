<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Country;
use App\User;
use App\Profile;

class ProfileController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::
            where('active', 1)
            -> where('phone_code', '<>', 0)
            -> orderBy('phone_code', 'asc')
            -> select('phone_code')
            -> distinct()
            -> get()
            -> pluck('phone_code')
            -> all();
        $user = Auth::user();
        return view('pages.profile.index')
            -> with('countries', $countries)
            -> with('phoneCodes', $phoneCodes)
            -> with('user', $user);
    }
}
