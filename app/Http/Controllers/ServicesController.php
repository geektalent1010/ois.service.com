<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ServicesController extends Controller
{
    public function index() {
        $lang = cache('lang');
        $content = Content::where('title', 'SERVICES')
            ->where('lang', $lang)
            ->orderBy('order_num')
            ->get()
            ->pluck('content')
            ->all();
        return view ('pages.services.index')
            ->with('content', $content);
    }
}
