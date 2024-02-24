<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ServicesController extends Controller
{
    public function index() {
        $content = Content::where('order_num', 2)
            ->get()
            ->pluck('content')
            ->all();
        return view ('pages.services.index')
            ->with('content', $content);
    }
}
