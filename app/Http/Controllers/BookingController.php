<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        return view('pages.booking.index');
    }

    public function iframeBooking() {
        return view('pages.booking.iframeBooking');
    }
}
