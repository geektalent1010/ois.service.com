<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\AdminForgot;

class ForgotPasswordController extends Controller
{
    public function index() {
        return view('admin.forgot.index');
    }

    public function send(Request $request) {
        $email = $request->input('email');
        $randomNumber = rand(100000, 999999);
        $user = User::where('email', $email)->first();
        $res = "nodata";
        if($user) {
            $user->confirmId = $randomNumber;
            $user->save();
            $res = "success";
            Mail::to($user->email)->send(new AdminForgot($user));
        }
        $request->session()->put('result', $res);
        return redirect()->route('admin.forgot.index');
    }

    public function reset(Request $request) {
        $confirmId = $request->input('confirmId');
        return view('admin.forgot.reset')
        ->with('confirmId', $confirmId);
    }

    public function resetPassword(Request $request) {
        $confirmId = $request->input('confirmId');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if($user) {
            if($user->confirmId == $confirmId) {
                $user->password = Hash::make($password);
                $user->save();
                $res['status'] = "success";
            } else {
                $res['status'] = "noConfirmId";
            }
        } else {
            $res['status'] = "noUser";
        }
        return $res;
    }
}
