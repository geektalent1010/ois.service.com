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

        if($request->input('id')) {
            $id = $request->input('id');
            $user = User::where('id', $id)->first();
            $res['num'] = 1;
        } else {
            $searchIndex = $request->input('searchIndex');
            $email = $request->input('search');
            $userCountry = Auth::guard('admin')->user()->profile->country_center;

            Auth::guard('admin')->user()->isSuperAdmin() ?
                $users = User::with('profile')
                    ->where('status', 1)
                    ->where('is_admin', 0)
                    ->where(function($query) use ($email) {
                        $query->where('email', $email)
                            ->orWhereHas('profile', function($query) use ($email) {
                                $query->where('first_name', $email)
                                    ->orWhere('last_name', $email);
                            });
                    })
                    ->get() :
                $users = User::with('profile')
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
                    ->get();
            $user;
            if($users[$searchIndex]) {
                $user = $users[$searchIndex];
            }
            $res['num'] = count($users);
        }


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

    public function deleteClient(Request $request) {
        $userid = $request->input('userid');
        $user = User::find($userid);
        if($user) {
            $user->delete();
            $res['status'] = true;
        } else {
            $res['status'] = false;
        }

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Deleted Client',
        ]);

        return json_encode($res);
    }

    public function exportCSV(Request $request) {
        $userid = $request->input('userid');
        if($userid != -1) {
            $results[0] = User::where('id', $userid)->first();
        } else {
            $results = User::where('is_admin', '0')->get();
        }


        if (!$results) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $filename = 'client-data.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        return response()->stream(function() use ($results) {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'User Id',
                'Email',
                'Username',
                'First Name',
                'Last Name',
                'Birthday',
                'Gender',
                'Phone Number',
                'Country',
                'City',
                'Street',
                'House Number',
                'Postal Code',
                'Status',
                'Created At',
            ]);

            foreach($results as $result) {
                $data = [
                    isset($result->id) ? $result->id : '',
                    isset($result->email) ? $result->email : '',
                    isset($result->username) ? $result->username : '',
                    isset($result->profile->first_name) ? $result->profile->first_name : '',
                    isset($result->profile->last_name) ? $result->profile->last_name : '',
                    isset($result->profile->birthday) ? $result->profile->birthday : '',
                    isset($result->profile->gender) ? $result->profile->gender : '',
                    isset($result->profile->phone_number) ? $result->profile->phone_number : '',
                    isset($result->profile->country->name) ? $result->profile->country->name : '',
                    isset($result->profile->city) ? $result->profile->city : '',
                    isset($result->profile->street) ? $result->profile->street : '',
                    isset($result->profile->house_number) ? $result->profile->house_number : '',
                    isset($result->profile->postal_code) ? $result->profile->postal_code : '',
                    isset($result->status) ? $result->status : '',
                    isset($result->created_at) ? $result->created_at : '',
                ];


                fputcsv($handle, $data);
            }

            fclose($handle);
        }, 200, $headers);
    }
}
