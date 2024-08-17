<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use App\Checklist;

class OfficesController extends Controller
{
    public function index() {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function($data) {
            return $data->country;
        });
        return view ('pages.offices.index')
            ->with('modalData', $this->modalData)
            -> with('offices', $offices);
    }

    public function officeFilter(Request $request) {
        $id = $request->get('office_id');
        if ($id) {
            $data['offices'] = Office::where('id', '=', $id)->get();
            $data['services'] = Checklist::whereHas('office', function ($query) use ($id) {
                $query->where('id', $id);
            })
                ->groupBy('visa_type')
                ->pluck('visa_type')
                ->toArray();
            return response()->json($data);
        }
    }

    public function getCenters(Request $request) {
        $type = $request->input('type');
        $offices = Office::where('type', $type)
            ->orderBy('country', 'asc')
            ->orderBy('city', 'asc')
            ->get()
            ->groupBy(function($data) {
                return $data->country;
        });
        return response()->json($offices);
    }
}
