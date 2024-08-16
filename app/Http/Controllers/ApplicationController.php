<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Office;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.application.index')
            ->with('modalData', $this->modalData);
    }

    public function bvn()
    {
        $offices = Office::where('type', 'BVN')
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()
            ->groupBy(function ($data) {
                return $data->country;
            });
        return view('pages.application.bvnApplication')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices);
    }

    public function nin()
    {
        $offices = Office::where('type', 'NIN')
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()
            ->groupBy(function ($data) {
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

    public function usaChecklists()
    {
        $offices = Office::where('type', 'VISA_USA')
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()->groupBy(function ($data) {
            return $data->country;
        });
        $exceptVisa = ["Diplomatic", "Official", "Standard", "UN", "BVN_Common", "BVN_Fees", "NIN_Common", "Fees", "NIN_Common_0", "NIN_Common_1", "NIN_Common_2"];
        $services = Checklist::groupBy('visa_type')->pluck('visa_type')->toArray();
        $filteredServices = array_diff($services, $exceptVisa);
        return view('pages.application.usaChecklists')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices)
            ->with('services', $filteredServices);
    }

    public function nigerianChecklists()
    {
        $offices = Office::where('type', 'VISA_NIGERIA')
            ->where('country','!=','Nigeria')
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()
            ->groupBy(function ($data) {
                return $data->country;
            });
        return view('pages.application.nigerianChecklists')
            ->with('modalData', $this->modalData)
            ->with('offices', $offices);
    }

    public function checklistFilter(Request $request)
    {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        $data['fees'] = Checklist::where('office_id', $office)->where('visa_type', 'Fees')->get();
        $data['office'] = Office::where('id', $office)->first();
        if ($office && $visaType) {
            $data['checklists'] = Checklist::where('office_id', $office)->where('visa_type', $visaType)->get();
            return view('pages.application.partials.documents', $data);
        } else {
            $data['checklists'] = Checklist::where('office_id', -1)->get();

            return view('pages.application.partials.documents', $data);
        }
    }

    public function usaChecklistFilter(Request $request)
    {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        $data['office'] = Office::where('id', $office)->first();
        if ($office && $visaType) {
            $data['checklists'] = Checklist::where('office_id', $office)->where('visa_type', $visaType)->get();
            return view('pages.application.partials.documents', $data);
        } else {
            $data['checklists'] = Checklist::where('office_id', -1)->get();

            return view('pages.application.partials.documents', $data);
        }
    }

    public function ninChecklistFilter(Request $request)
    {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        $data['office'] = Office::where('id', $office)->first();
        $data['fees'] = Checklist::where('visa_type', 'NIN_Common')
            ->orWhere('visa_type', 'NIN_Common_'.$data['office']->location)->get();

        return view('pages.application.partials.documents', $data);
    }

    public function bvnChecklistFilter(Request $request) {
        $office = $request->get('office');
        $visaType = $request->get('visa_type');
        $data['fees'] = Checklist::where(function ($query) use ($office) {
            $query->where('office_id', $office)
            ->where('visa_type', 'BVN_Fees');
        })->orWhere('visa_type', 'BVN_Common')->get();
        $data['office'] = Office::where('id', $office)->first();
        return view('pages.application.partials.documents', $data);
    }
}
