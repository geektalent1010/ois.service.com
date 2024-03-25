<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Country;
use App\User;
use App\Profile;
use App\AdminLog;

class ClientManagerController extends Controller
{
    public function index() {
        $isAllow = Auth::guard('admin')->user()->isAllowClientManager();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $userCountry = Auth::guard('admin')->user()->profile->country_center;

        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::where('active', 1)
            ->where('phone_code', '<>', 0)
            ->orderBy('phone_code', 'asc')
            ->select('phone_code')
            ->distinct()
            ->get()
            ->pluck('phone_code')
            ->all();

        Auth::guard('admin')->user()->isSuperAdmin() ?
            $users = User::where('status', 1)
                ->where('is_admin', 0)
                ->orderBy('email')
                ->get() :
            $users = User::whereHas('profile', function($query) use ($userCountry) {
                $query->whereHas('country', function($query) use ($userCountry) {
                    $query->where('name', $userCountry);
                });
            })
            ->where('status', 1)
            ->where('is_admin', 0)
            ->get();

        return view('admin.client.index')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('users', $users)
            ->with('isSuperAdmin', Auth::guard('admin')->user()->isSuperAdmin());
    }


    public function createClient(Request $request) {
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
        $user->is_admin = 0;
        $user->save();

        $profile = new Profile();
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_id = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;
        $profile->street = $request->input('street');
        $profile->house_number = $request->input('houseNr');

        $profile->save();

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Created New Client',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function updateClient(Request $request) {
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
        $user->is_admin = 0;
        $user->save();

        $profile = $user->profile;
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_id = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;
        $profile->street = $request->input('street');
        $profile->house_number = $request->input('houseNr');
        $profile->save();

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Edited Client',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function getClientInfo(Request $request) {

        $email = $request->input('search');
        $userCountry = Auth::guard('admin')->user()->profile->country_center;

        Auth::guard('admin')->user()->isSuperAdmin() ?
            $user = User::with('profile')
                ->where('status', 1)
                ->where('is_admin', 0)
                ->where(function($query) use ($email) {
                    $query->where('email', $email)
                        ->orWhereHas('profile', function($query) use ($email) {
                            $query->where('first_name', $email)
                                ->orWhere('last_name', $email);
                        });
                })
                ->first() :
            $user = User::with('profile')
                ->where('status', 1)
                ->where('is_admin', 0)
                ->where(function($query) use ($email) {
                    $query->where('email', $email)
                        ->orWhereHas('profile', function($query) use ($email) {
                            $query->where('first_name', $email)
                                ->orWhere('last_name', $email);
                        });
                })
                ->whereHas('profile.country', function($query) use ($userCountry) {
                    $query->where('name', $userCountry);
                })
                ->first();

        if($user) {
            $res['status'] = 'success';
            $res['userId'] = $user->id;
            $res['firstName'] = $user->profile->first_name;
            $res['lastName'] = $user->profile->last_name;
            $res['street'] = $user->profile->street;
            $res['houseNr'] = $user->profile->house_number;
            $res['phoneNumber'] = $user->profile->phone_number;
            $res['email'] = $user->email;
            $res['city'] = $user->profile->city;
            $res['country'] = $user->profile->country_id;
            $res['username'] = $user->username;
            $res['registDate'] = date('m-d-Y');
        } else {
            $res['status'] = 'nodata';
        }
        return json_encode($res);
    }
}
