<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index() {
        return view('pages.policy.index')
            ->with('data', $this->modalData[1]);
    }
}
