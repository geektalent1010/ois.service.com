<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index() {
        return view('pages.terms.index')
            ->with('data', $this->modalData[0]);
    }
}
