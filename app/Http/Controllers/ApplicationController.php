<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Office;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('pages.application.index')
            ->with('modalData', $this->modalData);
    }

    public function bvn()
    {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('pages.application.bvnApplication')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices);
    }

    public function nin()
    {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('pages.application.ninApplication')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices);
    }

    public function checklists()
    {
        $offices = Office::where('country','!=','Nigeria')->orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('pages.application.checklists')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices);
    }

    public function checklistFilter(Request $request)
    {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        $data['fees'] = Checklist::where('office_id', $office)->where('visa_type', 'Fees')->first();
        if ($office && $visaType) {
            $data['checklists'] = Checklist::where('office_id', $office)->where('visa_type', $visaType)->get();
            return view('pages.application.partials.documents', $data);
        } else {
            $data['checklists'] = Checklist::where('office_id', -1)->get();

            return view('pages.application.partials.documents', $data);
        }
    }
}
