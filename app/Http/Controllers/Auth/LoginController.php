<?php

namespace App\Http\Controllers\Auth;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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

    public function showLoginForm(Request $request)
    {
        $confirmId = $request->input('confirmId');
        $email = $request->input('email');
        return view('auth.login', compact('confirmId', 'email'));
    }

    public function login(Request $request)
    {
        Session::flush();
        $request->session()->put('password', true);
        $this->validateLogin($request);
        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            if ($user->status != 1) {
                $confirmId = $request->input('confirmId');
                if ($confirmId != $user->confirmId) {
                    return redirect()->back()->withErrors([
                        'email' => 'Please confirm your email from your mailbox',
                    ]);
                }
            }
        }
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function authenticated(Request $request, $user)
    {
        $user->status = 1;
        $user->save();
    }
}
