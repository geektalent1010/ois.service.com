<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\Checklist;

class PriceManagerController extends Controller
{
    public function index() {
        $isAllow = Auth::guard('admin')->user()->isAllowPriceEditor();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.price.index')
            ->with('offices', $offices);
    }

    public function getPrice(Request $request) {
        $officeId = $request->input('officeId');
        $office = Office::where('id', $officeId)->first();
        if(!Auth::guard('admin')->user()->isSuperAdmin() && (Auth::guard('admin')->user()->isAllowPriceEditor() && Auth::guard('admin')->user()->profile->country->name != $office->country)) {
            $res['status'] = 'unauthorize';
            return json_encode($res);
        }
        $checklist = Checklist::where('office_id', $officeId)
            ->where('visa_type', 'Fees')
            ->first();
        if(!$checklist) {
            $res['status'] = 'nodata';
            return json_encode($res);
        }
        return json_encode($checklist);
    }

    public function updatePrice(Request $request) {
        $id = $request->input('edit-id');
        if(!$id) {
            $checklist = new Checklist();
            $checklist->visa_type = 'Fees';
            $checklist->office_id = $request->input('officeId');
            $checklist->file_name = '';
        } else {
            $checklist = Checklist::where('id', $id)->first();
        }
        $checklist->title = $request->input('title');
        $checklist->description = $request->input('description');
        $checklist->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
