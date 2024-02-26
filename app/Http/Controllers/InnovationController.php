<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class InnovationController extends Controller
{
    public function index() {
        $lang = cache('lang');
        $content = Content::where('title', 'INNOVATION')
            ->where('lang', $lang)
            ->orderBy('order_num')
            ->get()
            ->pluck('content')
            ->all();
        return view ('pages.innovation.index')
            ->with('modalData', $this->modalData)
            ->with('content', $content);
    }
}
