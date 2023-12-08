<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReachController extends Controller
{
    public function index() {
        return view ('pages.reach.index');
    }
}
