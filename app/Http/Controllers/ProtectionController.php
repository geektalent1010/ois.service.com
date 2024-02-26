<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ProtectionController extends Controller
{
    public function index(){
        $lang = cache('lang');
        $data = Content::where('lang', $lang)
            ->where('title', 'DATA PROJECT')
            ->where('order_num', 1)
            ->first();
        return view('pages.protection.index')
            ->with('data', $data);
    }
}
