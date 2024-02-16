<?php

namespace App\Http\Controllers\Auth;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request) {
        $id = $request->input('id');
        return view('auth.login', compact('id'));
    }

    public function login(Request $request) {
        $this->validateLogin($request);

        $user = User::where('email', $request->input('email'))->first();
        if($user) {
            if($user->status != 1) {
                $id = $request->input('id');
                if($id != $user->id) {
                    return redirect()->back()->withErrors([
                        'email' => 'Thank you for your confirmation. Please use your email address for the username and the password you had selected during the registration process.',
                    ]);
                }
            }
        }
        if($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
