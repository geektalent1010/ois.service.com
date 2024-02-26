<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index () {
        return view('pages.roles.index')
        ->with('modalData', $this->modalData)
        ;
    }
}
