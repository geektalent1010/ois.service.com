<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index() {
        return view ('pages.backoffice.index')
            ->with('modalData', $this->modalData);
    }
}
