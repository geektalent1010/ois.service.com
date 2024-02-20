<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Country;
use App\User;

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

    public function updateProfile(Request $request) {
        $user = User::where('id', $request->input('userid'))->first();

        $duplicationUsername = User::where('id', '<>', $request->input('userid'))
            ->where('username', $request->input('username'))
            ->exists();
        if($duplicationUsername) {
            $res['status'] = 'error';
            $res['msg'] = 'duplicateUsername';
            return json_encode($res);
        }

        $user->email = $request->input('email');
        $user->username = $request->input('username');
        if($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        $user->profile->first_name = $request->input('firstName');
        $user->profile->last_name = $request->input('lastName');
        $user->profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $user->profile->city = $request->input('city');
        $user->profile->country_id = $request->input('country');
        $user->profile->save();

        $res['status'] = 'success';
        return json_encode($res);
    }
}
