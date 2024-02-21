<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Country;
use App\User;
use App\Profile;

class AdminManagerController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::where('active', 1)
            ->where('phone_code', '<>', 0)
            ->orderBy('phone_code', 'asc')
            ->select('phone_code')
            ->distinct()
            ->get()
            ->pluck('phone_code')
            ->all();
        $adminUsers = User::where('is_admin', 1)
            ->where('status', 1)
            ->get()
            ->pluck('email')
            ->all();
        return view('admin.manager.index')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('adminUsers', $adminUsers);
    }

    public function createAdmin(Request $request) {
        $user = new User();
        $duplicationEmail = User::where('email', $request->input('email'))
            ->exists();
        if($duplicationEmail) {
            $res['status'] = 'duplicatedEmail';
            return json_encode($res);
        }
        $duplicationUsername = User::where('username', $request->input('username'))
            ->exists();
        if($duplicationUsername) {
            $res['status'] = 'duplicatedUsername';
            return json_encode($res);
        }

        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = 1;
        $user->save();

        $profile = new Profile();
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_id = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;
        $profile->save();

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function updateAdmin(Request $request) {
        $user = User::where('id', $request->input('userid'))
            ->first();
        $duplicationEmail = User::where('email', $request->input('email'))
            ->where('id', '<>', $request->input('userid'))
            ->exists();
        if($duplicationEmail) {
            $res['status'] = 'duplicatedEmail';
            return json_encode($res);
        }
        $duplicationUsername = User::where('username', $request->input('username'))
            ->where('id', '<>', $request->input('userid'))
            ->exists();
        if($duplicationUsername) {
            $res['status'] = 'duplicatedUsername';
            return json_encode($res);
        }

        $user->email = $request->input('email');
        $user->username = $request->input('username');
        if($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->is_admin = 1;
        $user->save();

        $profile = $user->profile;
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_id = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;
        $profile->save();

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function getManagerInfo(Request $request) {
        $email = $request->input('search');
        $user = User::where('email', $email)
            ->first();
        if($user) {
            $res['status'] = 'success';
            $res['userId'] = $user->id;
            $res['firstName'] = $user->profile->first_name;
            $res['lastName'] = $user->profile->last_name;
            $res['phoneNumber'] = $user->profile->phone_number;
            $res['email'] = $user->email;
            $res['center'] = $user->profile->city;
            $res['country'] = $user->profile->country_id;
            $res['username'] = $user->username;
        } else {
            $res['status'] = 'nodata';
        }
        return json_encode($res);
    }
}