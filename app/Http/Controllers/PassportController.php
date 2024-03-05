<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function index() {
        return view('pages.passport.index')
            ->with('modalData', $this->modalData);
    }
}
