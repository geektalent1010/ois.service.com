<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportEmail;

class ContactController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        return view ('pages.contact.index')
            ->with('modalData', $this->modalData)
            ->with('countries', $countries);
    }

    public function send(Request $request) {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        $support = 'customer.support@oisservices.com';
        Mail::to($support)->send(new SupportEmail($data));
        return true;
    }
}
