<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\User;

class ClientManagerController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        $phoneCodes = Country::where('active', 1)
            ->where('phone_code', '<>', 0)
            ->orderBy('phone_code', 'asc')
            ->select('phone_code')
            ->distinct()
            ->get()
            ->pluck('phone_code')
            ->all();
        $users = User::where('status', 1)
            ->orderBy('email')
            ->get()
            ->pluck('email')
            ->all();
        return view('admin.client.index')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes)
            ->with('users', $users);
    }
}
