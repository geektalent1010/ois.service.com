<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectionController extends Controller
{
    public function index(){
        return view('pages.protection.index');
    }
}
