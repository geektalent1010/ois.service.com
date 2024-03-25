<?php

namespace App\Http\Controllers\Admin;

use App\AdminLog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Country;
use App\User;
use App\Office;

class ProfileController extends Controller
{
    public function index() {
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

        $roles = [
            'clientManager' => 0,
            'priceEditor' => 0,
            'checklistEditor' => 0,
            'centerEditor' => 0,
            'adminManager' => 0,
            'mailManager' => 0,
            'contentEditor' => 0
        ];
        if($user->isSuperAdmin()) {
            $roles['clientManager'] = 1;
            $roles['priceEditor'] = 1;
            $roles['checklistEditor'] = 1;
            $roles['centerEditor'] = 1;
            $roles['adminManager'] = 1;
            $roles['mailManager'] = 1;
            $roles['contentEditor'] = 1;
        } else {
            foreach($user->roles as $role) {
                if($role->role_name == 'ClientManager') {
                    $roles['clientManager'] = $role->status;
                }
                if($role->role_name == 'CenterEditor') {
                    $roles['centerEditor'] = $role->status;
                }
                if($role->role_name == 'PriceEditor') {
                    $roles['priceEditor'] = $role->status;
                }
                if($role->role_name == 'ChecklistEditor') {
                    $roles['checklistEditor'] = $role->status;
                }
            }
        }
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.profile.index')
            ->with('user', $user)
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('roles', $roles)
            ->with('offices', $offices);
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
        $user->profile->save();

        AdminLog::create([
            'user_id'=>auth()->guard('admin')->user()->id,
            'action'=>'Edited My Profile',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }
}
