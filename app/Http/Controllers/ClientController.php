<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('pages.client.index')
        ->with('modalData', $this->modalData)
        ;
    }
}
