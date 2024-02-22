<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Office;
use App\Checklist;

class PriceManagerController extends Controller
{
    public function index() {
        $offices = Office::orderBy('country', 'asc')->orderBy('city', 'asc')->get()->groupBy(function ($data) {
            return $data->country;
        });
        return view('admin.price.index')
            ->with('offices', $offices);
    }

    public function getPrice(Request $request) {
        $officeId = $request->input('officeId');
        $office = Checklist::where('office_id', $officeId)
            ->where('visa_type', 'Fees')
            ->first();
        return json_encode($office);
    }

    public function updatePrice(Request $request) {
        $id = $request->input('edit-id');
        if(!$id) {
            $checklist = new Checklist();
            $checklist->visa_type = 'Fees';
            $checklist->office_id = $request->input('officeId');
            $checklist->file_name = '';
        } else {
            $checklist = Checklist::where('id', $id)->first();
        }
        $checklist->title = $request->input('title');
        $checklist->description = $request->input('description');
        $checklist->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
