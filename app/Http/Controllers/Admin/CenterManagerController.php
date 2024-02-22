<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;

class CenterManagerController extends Controller
{
    public function index() {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.center.index')
            ->with('offices', $offices);
    }

    public function getCenterInfo(Request $request) {
        $officeId = $request->input('officeId');
        $office = Office::where('id', $officeId)->first();
        return json_encode($office);
    }

    public function updateOffice(Request $request) {
        $id = $request->input('officeId');
        if($id == 0) {
            $office = new Office();
            $office->postal = '';
            $office->phone = '';
            $office->email = '';
            $office->providedby = '';
        } else {
            $office = Office::where('id', $id)->first();
        }

        $office->country = $request->input('country');
        $office->city = $request->input('city');
        $office->address = $request->input('address');
        $office->working_days = $request->input('workingDay');
        $office->working_time = $request->input('workingTime');
        $office->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
