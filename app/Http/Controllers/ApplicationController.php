<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Office;
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
        $offices = Office::get()->groupBy(function($data) {
            return $data->country;
        });
        return view('pages.application.checklists')
            -> with('offices', $offices);
    }

    public function checklistFilter(Request $request) {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        if ($office && $visaType) {
            $data['checklists'] = Checklist::where('office_id', $office)->where('visa_type', $visaType)->get();

            return view('pages.application.partials.documents', $data);
        } else {
            $data['checklists'] = Checklist::where('office_id', -1)->get();

            return view('pages.application.partials.documents', $data);
        }
    }
}
