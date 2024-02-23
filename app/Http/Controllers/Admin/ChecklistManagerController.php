<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;
use App\Checklist;

class ChecklistManagerController extends Controller
{
    public function index() {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.checklist.index')
            ->with('offices', $offices);
    }

    public function getChecklist(Request $request) {
        $officeId = $request->input('officeId');
        $type = $request->input('type');
        $checklist = Checklist::where('office_id', $officeId)
            ->where('visa_type', $type)
            ->get();
        return json_encode($checklist);
    }
}
