<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Office;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
            where('phonecode', '<>', 0) ->
            orderBy('phonecode', 'asc') ->
            select('phonecode') ->
            distinct() ->
            get() ->
            pluck('phonecode') ->
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
            'first_name' => $user->first_name,
            'last_name' => $user->last_name
        ];
        return true;
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
            'first_name' => ['required', 'string','min: 2', 'max:50'],
            'last_name' => ['required', 'string','min: 2', 'max:50'],
            'phone' => ['required', 'digits_between:7,50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:offices'],
            'street' => ['required', 'string', 'min:3', 'max:50'],
            'house_number' => ['required', 'string', 'min:1', 'max:50'],
            'postal_code' => ['required', 'string', 'min:3', 'max:50'],
            'city' => ['required', 'string', 'min:3', 'max:50'],
            'password' => ['required', 'string', 'min:8'],
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
        // dd($data);
        $user = User::create([
            'name' => $data['first_name'].' '.$data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $office = Office::create([
            'country' => $data['country'],
            'city' => $data['city'],
            'address' => $data['street'].' '.$data['house_number'],
            'email' => $data['email'],
            'phone' => $data['pre_phone'].' '.$data['phone'],
            'postal' => $data['postal_code'],
            'providedby' => ""
        ]);
        return $user;
    }


}
