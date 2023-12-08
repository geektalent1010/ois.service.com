<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InnovationController extends Controller
{
    public function index() {
        return view ('pages.innovation.index');
    }
}
