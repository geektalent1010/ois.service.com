<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Country;
use App\User;
use App\Profile;
use App\Role;
use App\Office;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome1;
use Illuminate\Support\Facades\Auth;
use App\AdminLog;

class AdminManagerController extends Controller
{
    public function index() {
        $user = Auth::guard('admin')->user();
        if(!$user->isSuperAdmin()) {
            return redirect()->route('admin.dashboard.index');
        }
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::where('active', 1)
            ->where('phone_code', '<>', 0)
            ->orderBy('phone_code', 'asc')
            ->select('phone_code')
            ->distinct()
            ->get()
            ->pluck('phone_code')
            ->all();
        $adminUsers = User::where(function($query) {
            $query->where('is_admin', 1)
                  ->orWhere('is_admin', 2);
                })
                ->where('status', 1)
                ->orderBy('email')
                ->get();
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.manager.index')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('adminUsers', $adminUsers)
            ->with('offices', $offices);
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
        $user->is_admin = $request->input('role');
        $user->save();

        $profile = new Profile();
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_id = 1;
        $profile->country_center = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;

        $profile->save();

        $role = new Role();
        $role->user_id = $user->id;
        $role->role_name = 'ClientManager';
        $role->status = $request->input('clientStatus') == "true" ? 1 : 0;
        $role->save();

        $role = new Role();
        $role->user_id = $user->id;
        $role->role_name = 'CenterEditor';
        $role->status = $request->input('centerStatus') == "true" ? 1 : 0;
        $role->save();

        $role = new Role();
        $role->user_id = $user->id;
        $role->role_name = 'PriceEditor';
        $role->status = $request->input('priceStatus') == "true" ? 1 : 0;
        $role->save();

        $role = new Role();
        $role->user_id = $user->id;
        $role->role_name = 'ChecklistEditor';
        $role->status = $request->input('checklistStatus') == "true" ? 1 : 0;
        $role->save();

        $res['status'] = 'success';
        $userData['first_name'] = $profile->first_name;
        $userData['last_name'] = $profile->last_name;
        $userData['username'] = $user->username;
        $userData['password'] = $request->input('password');

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Created New Admin',
        ]);
        Mail::to($user->email)->send(new Welcome1($userData));
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
        $user->is_admin = $request->input('role');
        $user->save();

        $profile = $user->profile;
        $profile->first_name = $request->input('firstName');
        $profile->last_name = $request->input('lastName');
        $profile->phone_number = $request->input('phoneCode').' '.$request->input('phoneNumber');
        $profile->city = $request->input('city');
        $profile->country_center = $request->input('country');
        $profile->gender = 'm';
        $profile->user_id = $user->id;
        $profile->save();

        $roles = $user->roles;
        $flagClient = false;
        $flagCenter = false;
        $flagPrice = false;
        $flagChecklist = false;
        foreach($roles as $role) {
            if($role->role_name == 'ClientManager') {
                $flagClient = true;
                $role->status = $request->input('clientStatus') == "true" ? 1 : 0;
                $role->save();
            }
            if($role->role_name == 'CenterEditor') {
                $flagCenter = true;
                $role->status = $request->input('centerStatus') == "true" ? 1 : 0;
                $role->save();
            }
            if($role->role_name == 'PriceEditor') {
                $flagPrice = true;
                $role->status = $request->input('priceStatus') == "true" ? 1 : 0;
                $role->save();
            }
            if($role->role_name == 'ChecklistEditor') {
                $flagChecklist = true;
                $role->status = $request->input('checklistStatus') == "true" ? 1 : 0;
                $role->save();
        }
        }
        if(!$flagClient) {
            $role = new Role();
            $role->user_id = $user->id;
            $role->role_name = 'ClientManager';
            $role->status = $request->input('clientStatus') == "true" ? 1 : 0;
            $role->save();
        }

        if(!$flagCenter) {
            $role = new Role();
            $role->user_id = $user->id;
            $role->role_name = 'CenterEditor';
            $role->status = $request->input('centerStatus') == "true" ? 1 : 0;
            $role->save();
        }
        if(!$flagPrice) {
            $role = new Role();
            $role->user_id = $user->id;
            $role->role_name = 'PriceEditor';
            $role->status = $request->input('priceStatus') == "true" ? 1 : 0;
            $role->save();
        }
        if(!$flagChecklist) {
            $role = new Role();
            $role->user_id = $user->id;
            $role->role_name = 'ChecklistEditor';
            $role->status = $request->input('checklistStatus') == "true" ? 1 : 0;
            $role->save();
        }
        $res['status'] = 'success';
        $userData['first_name'] = $profile->first_name;
        $userData['last_name'] = $profile->last_name;
        $userData['username'] = $user->username;
        $userData['password'] = $request->input('password');

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Edited Admin',
        ]);

        Mail::to($user->email)->send(new Welcome1($userData));
        return json_encode($res);
    }

    public function getManagerInfo(Request $request) {

        if($request->input('id')) {
            $id = $request->input('id');
            $user = User::where('id', $id)->first();
            $res['num'] = 1;
        } else {
            $searchIndex = $request->input('searchIndex');
            $email = $request->input('search');
            $users = User::with('profile')
                ->where('status', 1)
                ->whereIn('is_admin', [1, 2])
                ->where(function($query) use ($email) {
                    $query->where('email', $email)
                        ->orWhereHas('profile', function($query) use ($email) {
                            $query->where('first_name', $email)
                                ->orWhere('last_name', $email);
                        });
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
            $res['phoneNumber'] = $user->profile->phone_number;
            $res['email'] = $user->email;
            $res['city'] = $user->profile->city;
            $res['country'] = $user->profile->country_center;
            $res['username'] = $user->username;
            $res['role'] = $user->is_admin;
            $res['roles'] = [];
            $roles = Role::where('user_id', $user->id)
                ->get();
            foreach($roles as $role) {
                if($role->role_name == 'ClientManager') {
                    $res['roles']['clientManager'] = $role->status;
                }
                if($role->role_name == 'CenterEditor') {
                    $res['roles']['centerEditor'] = $role->status;
                }
                if($role->role_name == 'PriceEditor') {
                    $res['roles']['priceEditor'] = $role->status;
                }
                if($role->role_name == 'ChecklistEditor') {
                    $res['roles']['checklistEditor'] = $role->status;
                }
            }
        } else {
            $res['status'] = 'nodata';
        }
        return json_encode($res);
    }

    public function deleteAdmin(Request $request) {
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
            'action'=>'Deleted Admin',
        ]);

        return json_encode($res);
    }

    public function loadLog(Request $request) {
        $page = $request->input('page');
        $count = 20;
        $offset = ($page - 1) * $count;
        $data = AdminLog::with('user.profile')->skip($offset)->take($count)->orderBy('id', 'desc')->get();
        foreach($data as $dat) {
            $dat->userInfo = json_encode($dat->user);
            $dat->profileInfo = json_encode($dat->user->profile);
        }
        return json_decode($data);
    }
}
