<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\Checklist;

class ChecklistManagerController extends Controller
{
    public function index() {
        $isAllow = Auth::guard('admin')->user()->isAllowChecklistEditor();
        if(!$isAllow) {
            return redirect()->route('admin.dashboard.index');
        }
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.checklist.index')
            ->with('offices', $offices);
    }

    public function getChecklist(Request $request) {
        $officeId = $request->input('officeId');
        $office = Office::where('id', $officeId)->first();
        if(!Auth::guard('admin')->user()->isSuperAdmin() && (Auth::guard('admin')->user()->isAllowPriceEditor() && Auth::guard('admin')->user()->profile->country->name != $office->country)) {
            $res['status'] = 'unauthorize';
            return json_encode($res);
        }
        $type = $request->input('type');
        $checklist = Checklist::where('office_id', $officeId)
            ->where('visa_type', $type)
            ->get();
        return json_encode($checklist);
    }

    public function updateChecklist(Request $request) {
        $officeId = $request->input('officeId');
        $visaType = $request->input('visaType');
        $editId = $request->input('edit-id');
        $title = $request->input('title');
        $description = $request->input('description');
        if($editId) {
            $checklist = Checklist::where('id', $editId)->first();
        } else {
            $checklist = new Checklist();
            $checklist->office_id = $officeId;
            $checklist->visa_type = $visaType;
            $checklist->file_name = '';
        }
        $checklist->title = $title;
        $checklist->description = $description;
        $checklist->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
