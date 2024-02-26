<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view ('pages.contact.index')
        ->with('modalData', $this->modalData)
        ;
    }
    public function reviewing() {
        return view ('pages.contact.reviewing')
        ->with('modalData', $this->modalData)
        ;
    }
}
