<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            ->with('modalData', $this->modalData)
            -> with('user', $user);
    }

    public function updateProfile(Request $req) {
        try {
            $user = Auth::user();
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();

            $profile = $user->profile;
            $profile->country_id = $req->country;
            $profile->first_name = $req->first_name;
            $profile->last_name = $req->last_name;
            $profile->birthday = $req->birthday;
            $profile->gender = $req->gender;
            $profile->phone_number = $req->pre_phone.' '.$req->phone;
            $profile->street = $req->street;
            $profile->house_number = $req->house_number;
            $profile->postal_code = $req->postal_code;
            $profile->city = $req->city;
            $profile->save();

            return redirect()->route('profile.index')->with('success', 'Profile successfully updated');
        } catch (\Exception $e) {
            return redirect()->route('profile.index')->with('error', 'error');
        }


    }
}
