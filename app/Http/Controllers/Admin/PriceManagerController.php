<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;
use App\Checklist;

class PriceManagerController extends Controller
{
    public function index() {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.price.index')
            ->with('offices', $offices);
    }

    public function getPrice(Request $request) {
        $officeId = $request->input('officeId');
        $office = Checklist::where('office_id', $officeId)
            ->where('visa_type', 'Fees')
            ->first();
        return json_encode($office);
    }
}
