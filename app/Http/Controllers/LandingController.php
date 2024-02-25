<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LandingController extends Controller
{
    public function landing() {
        return view ('landing');
    }

    public function passwordProtected() {
        return view('landing-password');
    }

    public function password(Request $req) {
        $password = $req->password;
        if($password == '2024') {
            $req->session()->put('password', true);
            return redirect()->route('landing');
        } else {
            return redirect()->back();
        }
    }

    public function setLocale(Request $request) {
        $locale = $request->input('lang');
        cache(['lang' => strtolower($locale)]);

        return response()->json($locale);
    }
}
