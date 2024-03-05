<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NinController extends Controller
{
    public function index() {
        return view('pages.nin.index')
            ->with('modalData', $this->modalData);
    }
}
