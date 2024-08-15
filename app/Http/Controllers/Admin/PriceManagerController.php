<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\Checklist;
use App\AdminLog;

class PriceManagerController extends Controller
{
    public function index(Request $request) {
        $type = $request->input('type');
        if(!$type) $type = "VISA_USA";

        $isAllow = Auth::guard('admin')->user()->isAllowPriceEditor();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $offices = Office::where('type', $type)
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()
            ->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.price.index')
            ->with('offices', $offices)
            ->with('type', $type);
    }

    public function getPrice(Request $request) {
        $officeId = $request->input('officeId');
        $type = $request->input('type');
        if(!Auth::guard('admin')->user()->isSuperAdmin()) {
            $centers = explode(",", Auth::guard('admin')->user()->profile->country_center);
            $isAllowCenter = false;
            foreach($centers as $center) {
                if($center == $officeId) {
                    $isAllowCenter = true;
                    break;
                }
            }
            if(!$isAllowCenter) {
                $res['status'] = 'unauthorize';
                return json_encode($res);
            }
        }
        $office = Office::where('id', $officeId)->first();

        $checklists = Checklist::where(function ($query) use ($type, $officeId, $office) {
            if($type == 'VISA_USA' || $type == 'VISA_NIGERIA') {
                $query->where('office_id', $officeId)
                    ->where('visa_type', 'Fees');
            } else if($type == 'BVN') {
                $query->where('visa_type', 'BVN_Common')
                    ->orWhere(function ($query) use ($officeId) {
                        $query->where('visa_type', 'BVN_Fees')
                            ->where('office_id', $officeId);
                    });
            } else if($type == 'NIN') {
                $query->where('visa_type', 'NIN_Common')
                    ->orWhere('visa_type', 'NIN_Common_'.$office->location);
            }
        })->get();
        
        if(!$checklists) {
            $res['status'] = 'nodata';
            return json_encode($res);
        }
        return json_encode($checklists);
    }

    public function updatePrice(Request $request) {
        $id = $request->input('edit-id');
        $type = $request->input('type');
        $office = Office::where('id', $request->input('officeId'))->first();
        if(!$id) {
            $checklist = new Checklist();
            if($type == 'VISA_USA' || $type == 'VISA_NIGERIA') {
                $checklist->visa_type = 'Fees';
            } else if($type == 'BVN') {
                $checklist->visa_type = 'BVN_Fees';
            } else if($type == 'NIN') {
                $checklist->visa_type = 'NIN_Fees';
            }
            $checklist->office_id = $request->input('officeId');
            $checklist->file_name = '';
        } else {
            $checklist = Checklist::where('id', $id)->first();
        }
        $checklist->title = $request->input('title');
        $checklist->description = $request->input('description');
        $checklist->save();

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Edited Center Price',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }
}
