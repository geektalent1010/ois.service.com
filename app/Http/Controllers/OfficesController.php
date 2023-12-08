<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offices;

class OfficesController extends Controller
{
    public function index() {
        return view ('pages.offices.index');
    }

    public function officeFilter(Request $request) {
        $country = $request->get('country_name');
        if ($country) {
            $offices = Offices::query()->where('country', 'LIKE', "%{$country}%")->get();
            return response()->json($offices);
        }
    }
}
