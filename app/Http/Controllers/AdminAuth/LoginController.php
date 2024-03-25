<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\AdminLog;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/admin/dashboard";

    public function __construct() {
        $this->middleware("guest:admin")->except("logout");
    }

    public function showLoginForm(Request $request) {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        Session::flush();
        $request->session()->put('password', true);
        $credetials = $request->only('email', 'password');
        $credetials['is_admin'] = [1, 2];

        if(Auth::guard('admin')->attempt($credetials)) {
            AdminLog::create([
                'user_id'=>Auth::guard('admin')->user()->id,
                'action'=>'Login',
            ]);
            return redirect()->intended('/admin/dashboard');
        } else {
            return back()->withErrors(['email'=> 'Invalid credentials']);
        }
    }

    public function logout() {
        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Logout',
        ]);
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
