<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index() {
        return view ('pages.solutions.index')
        ->with('modalData', $this->modalData)
        ;
    }
}
