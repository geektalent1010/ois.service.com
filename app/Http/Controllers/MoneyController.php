<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index() {
        return view ('pages.money.index')
        ->with('modalData', $this->modalData)
        ;
    }
}
