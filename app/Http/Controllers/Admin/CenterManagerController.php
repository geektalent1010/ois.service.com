<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\AdminLog;

class CenterManagerController extends Controller
{
    public function index()
    {
        $isAllow = Auth::guard('admin')->user()->isAllowCenterEditor();
        if (!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.center.index')
            ->with('offices', $offices);
    }

    public function getCenterInfo(Request $request)
    {
        $officeId = $request->input('officeId');
        $office = Office::where('id', $officeId)->first();
        if (!Auth::guard('admin')->user()->isSuperAdmin()) {
            $centers = explode(",", Auth::guard('admin')->user()->profile->country_center);
            $isAllowCenter = false;
            foreach ($centers as $center) {
                if ($center == $officeId) {
                    $isAllowCenter = true;
                    break;
                }
            }
            if (!$isAllowCenter) {
                $res['status'] = 'unauthorize';
                return json_encode($res);
            }
        }
        return json_encode($office);
    }

    public function updateOffice(Request $request)
    {
        $id = $request->input('officeId');
        if ($id == 0) {
            if (!Auth::guard('admin')->user()->isSuperAdmin()) {
                $res['status'] = 'unauthorize';
                return json_encode($res);
            }
            $office = new Office();
            $office->postal = '';
            $office->phone = '';
            $office->email = '';
            $office->providedby = '';
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $request->file->getClientOriginalName();
                $file->move(public_path('images/Flags'), $fileName);
                $office->flag = $fileName;
            }
        } else {
            $office = Office::where('id', $id)->first();
        }
        $location = filter_var($request->input('location'), FILTER_VALIDATE_BOOLEAN);
        $office->country = $request->input('country');
        $office->city = $request->input('city');
        $office->address = $request->input('address');
        $office->working_days = $request->input('workingDay');
        $office->working_time = $request->input('workingTime');
        if ($location) {
            if ($request->input('country') === 'Nigeria') {
                $office->location = 2;
            } else {
                $office->location = 1;
            }
        } else {
            $office->location = 0;
        }
        $office->save();

        AdminLog::create([
            'user_id' => Auth::guard('admin')->user()->id,
            'action' => 'Edited City Center',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }
}
