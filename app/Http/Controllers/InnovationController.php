<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class InnovationController extends Controller
{
    public function index() {
        $content = Content::where('order_num', 3)
        ->get()
        ->pluck('content')
        ->all();
        return view ('pages.innovation.index')
            ->with('content', $content);
    }
}
