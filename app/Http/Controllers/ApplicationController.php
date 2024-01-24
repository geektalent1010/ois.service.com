<?php

namespace App\Http\Controllers;

use App\Center;
use App\Checklist;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() {
        return view ('pages.application.index');
    }

    public function bvn() {
        return view ('pages.application.bvnApplication');
    }

    public function checklists() {
        $centers = Center::all();
        return view('pages.application.checklists')
            -> with('centers', $centers);
    }

    public function checklistFilter(Request $request) {
        $center = $request->get('center');
        $visaType = $request->get('visa_type');
        if ($center && $visaType) {
            $data['checklists'] = Checklist::where('center_id', $center)->where('visa_type', $visaType)->get();

            return view('pages.application.partials.documents', $data);
        }
    }
}
