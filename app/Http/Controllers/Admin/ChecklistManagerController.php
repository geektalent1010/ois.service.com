<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\Checklist;
use App\AdminLog;

class ChecklistManagerController extends Controller
{
    public function index(Request $request) {
        $isAllow = Auth::guard('admin')->user()->isAllowChecklistEditor();
        $type = $request->input('type');
        if(!$type) $type = "VISA_USA";
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
        return view('admin.checklist.index')
            ->with('offices', $offices)
            ->with('type', $type);
    }

    public function getServiceType(Request $request) {
        $officeId = $request->input('data');
        $services = Checklist::whereHas('office', function ($query) use ($officeId) {
            $query->where('id', $officeId);
        })
            ->groupBy('visa_type')
                ->orderBy('visa_type')
            ->pluck('visa_type')
            ->toArray();
        return json_encode($services);
    }

    public function getChecklist(Request $request) {
        $officeId = $request->input('officeId');
        $type = $request->input('type');
        $office = Office::where('id', $officeId)->first();
        $editType = $request->input('edit-type');
        $typeInput = $request->input('type-input');
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
        $typeSelect = $request->input('type-select');
        if($editType == 2 && $type == "VISA_USA") $typeSelect = $typeInput;
        $checklist = Checklist::where('office_id', $officeId)
            ->where('visa_type', $typeSelect)
            ->get();

        // html validation
        foreach($checklist as $che) {
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($che->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $che->description = $dom->saveHTML();
        }
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

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Edited Center Checklist',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function deleteChecklist(Request $request) {
        $id = $request->id;
        Checklist::where('id', $id)->delete();
        $res['status'] = 'success';

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Deleted Center Checklist',
        ]);
        return json_encode($res);
    }

    public function uploadChecklistFile(Request $request) {
        $checklistId = $request->input('checklistId');
        $checklist = Checklist::where('id', $checklistId)->first();

        if($checklist) {
            $publicPath = public_path('documents/'.$checklist->office->country.'_'.$checklist->office->city.'/'.$checklist->visa_type.'/'.$checklist->file_name);

            if($request->hasFile('file')) {
                if(file_exists($publicPath)){
                    unlink($publicPath);
                }

                $file = $request->file('file');
                $fileName = $request->file->getClientOriginalName();
                $file->move(public_path('documents/'.$checklist->office->country.'_'.$checklist->office->city.'/'.$checklist->visa_type), $fileName);

                $checklist->file_name = $fileName;
                $checklist->save();
            } else {
                $res['status'] = 'nofile';
                return $res;
            }
            $res['status'] = 'success';
            return $res;
        }
        $res['status'] = 'nochecklist';
        return $res;
    }
}
