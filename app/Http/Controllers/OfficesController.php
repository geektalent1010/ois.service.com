<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;

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
            $offices = Office::where('id', '=', $id)->get();
            return response()->json($offices);
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
