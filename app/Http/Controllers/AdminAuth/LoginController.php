<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/admin/dashboard";

    public function __construct() {
        $this->middleware("guest:admin")->except("logout");
    }

    public function showLoginForm() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $credetials = $request->only('email', 'password');
        $credetials['is_admin'] = true;

        if(Auth::guard('admin')->attempt($credetials)) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return back()->withErrors(['email'=> 'Invalid credentials']);
        }
    }
    
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
