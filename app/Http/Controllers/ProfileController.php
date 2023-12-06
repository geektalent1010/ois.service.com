<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class ProfileController extends Controller
{
    public function index() {
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
        return view('pages.profile.index')
            ->with('countries', $countries)
            ->with('phoneCodes', $phoneCodes);
    }
}
