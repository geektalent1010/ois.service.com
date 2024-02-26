<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view ('pages.book.index')
            ->with('modalData', $this->modalData)
        ;
    }
}
