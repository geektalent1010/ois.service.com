<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Profile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

use App\Country;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm() {
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::
            where('active', 1)->
            where('phone_code', '<>', 0) ->
            orderBy('phone_code', 'asc') ->
            select('phone_code') ->
            distinct() ->
            get() ->
            pluck('phone_code') ->
            all();
        return view('auth.register')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        if($response = $this->registered($request, $user)) {
            return redirect()->route('login');
        }
        return $request->wantsJson() ? new JsonResponse([], 201) : redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {
        $userData = [
            'first_name' => $user->profile->first_name,
            'last_name' => $user->profile->last_name,
            'confirmId' => $user->confirmId,
            'email' => $user->email,
            
        ];

        try {
            Mail::to($user->email)->send(new Welcome($userData));

        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Registration successful, but the welcome email could not be sent.');
        }
        return redirect('/login')->with('success', 'Registration Successful, Please verify your email address to login.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'min: 2', 'max:50'],
            'last_name' => ['required', 'string', 'min: 2', 'max:50'],
            'birthday' => ['required', 'date'],
            'phone' => ['required', 'digits_between:7,20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:users'],
            'street' => ['required', 'string', 'min:3', 'max:50'],
            'house_number' => ['required', 'string', 'min:1', 'max:50'],
            'city' => ['required', 'string', 'min:3', 'max:50'],
            'password' => ['required', 'string', 'min:8', 'max:100'],
            'postal_code' => ['max:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $randomNumber = rand(100000, 999999);
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 0,
            'username' => '',
            'confirmId' => $randomNumber,
        ]);

        Profile::create([
            'user_id' => $user->id,
            'country_id' => $data['country'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'phone_number' => $data['pre_phone'].' '.$data['phone'],
            'street' => $data['street'],
            'house_number' => $data['house_number'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
        ]);

        return $user;
    }


}
