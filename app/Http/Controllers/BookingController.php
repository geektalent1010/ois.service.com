<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        return view('pages.booking.index')
            ->with('modalData', $this->modalData);
    }

    public function iframeBooking() {
        return view('pages.booking.iframeBooking')
        ->with('modalData', $this->modalData)
        ;
    }

    public function iframeAdmin() {
        return view('pages.booking.iframeAdmin')
        ->with('modalData', $this->modalData)
        ;
    }
}
