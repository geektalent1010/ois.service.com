<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index() {
        return view('pages.calendar.index')
        ->with('modalData', $this->modalData)
        ;
    }
}
