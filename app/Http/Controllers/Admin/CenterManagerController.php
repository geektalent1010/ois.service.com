<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;

class CenterManagerController extends Controller
{
    public function index() {
        $isAllow = Auth::guard('admin')->user()->isAllowCenterEditor();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.center.index')
            ->with('offices', $offices);
    }

    public function getCenterInfo(Request $request) {
        $officeId = $request->input('officeId');
        $office = Office::where('id', $officeId)->first();
        if(!Auth::guard('admin')->user()->isSuperAdmin() && (Auth::guard('admin')->user()->isAllowCenterEditor() && Auth::guard('admin')->user()->profile->country_center != $office->country)) {
            $res['status'] = 'unauthorize';
            return json_encode($res);
        }
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
            if($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $request->file->getClientOriginalName();
                $file->move(public_path('images/Flags'), $fileName);
                $office->flag = $fileName;
            }
        } else {
            $office = Office::where('id', $id)->first();
        }

        $office->country = $request->input('country');
        if(!Auth::guard('admin')->user()->isSuperAdmin() && (Auth::guard('admin')->user()->isAllowCenterEditor() && Auth::guard('admin')->user()->profile->country_center != $office->country)) {
            $res['status'] = 'unauthorize';
            return json_encode($res);
        }
        $office->city = $request->input('city');
        $office->address = $request->input('address');
        $office->working_days = $request->input('workingDay');
        $office->working_time = $request->input('workingTime');
        $office->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
