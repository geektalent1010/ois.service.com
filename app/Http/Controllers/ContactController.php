<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class ContactController extends Controller
{
    public function index() {
        $countries = Country::where('active', 1)->get();
        return view ('pages.contact.index')
            ->with('modalData', $this->modalData)
            ->with('countries', $countries);
    }
    public function reviewing() {
        return view ('pages.contact.reviewing')
        ->with('modalData', $this->modalData)
        ;
    }
}
