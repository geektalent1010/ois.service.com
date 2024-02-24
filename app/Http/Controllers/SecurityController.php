<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class SecurityController extends Controller
{
    public function index() {
        $content = Content::where('order_num', 4)
        ->get()
        ->pluck('content')
        ->all();
        return view ('pages.security.index')
            ->with('content', $content);
    }
}
