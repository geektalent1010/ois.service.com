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

    public function index(Request $request) {
        $page = $request->input('page') ?? 1;
        $searchKey = $request->input('search') ?? "";
        $isAllow = Auth::guard('admin')->user()->isAllowClientManager();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $take = 10;
        $skip = ($page - 1) * $take;

        $users = User::where('status', 1)
            ->where('is_admin', 0)
            ->where(function($query) use ($searchKey) {
                $query->where('email', 'like', "%$searchKey%")
                ->orWhereHas('profile', function($query1) use ($searchKey) {
                    $query1->where('first_name', 'like', "%$searchKey%")
                    ->orWhere('last_name', 'like', "%$searchKey%");
                });
            })
            ->skip($skip)
            ->take($take)
            ->orderBy('email')
            ->get();
        $count = User::where('status', 1)
            ->where('is_admin', 0)
            ->where(function($query) use ($searchKey) {
                $query->where('email', 'like', "%$searchKey%")
                ->orWhereHas('profile', function($query1) use ($searchKey) {
                    $query1->where('first_name', 'like', "%$searchKey%")
                    ->orWhere('last_name', 'like', "%$searchKey%");
                });
            })
            ->count();

        return view('admin.client.index')
            ->with('users', $users)
            ->with('page', $page)
            ->with('count', $count)
            ->with('skip', $skip)
            ->with('take', $take)
            ->with('searchKey', $searchKey)
            ->with('isSuperAdmin', Auth::guard('admin')->user()->isSuperAdmin());
    }
    public function detailIndex(Request $request) {
        $id = $request->input('id') ?? 0;
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

        if($id != 0) {
            $user = User::where('id', $id)->first();
        } else {
            $user = "";
        }

        return view('admin.client.detailIndex')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('user', $user)
            ->with('id', $id)
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
            foreach($userid as $key => $user) {
                $results[$key] = User::where('id', $userid[$key])->first();
            }
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
