<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return view ('pages.services.index');
    }
}
