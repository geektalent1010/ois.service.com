<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class SecurityController extends Controller
{
    public function index() {
        $lang = cache('lang');
        $content = Content::where('title', 'SECURITY')
            ->where('lang', $lang)
            ->orderBy('order_num')
            ->get()
            ->pluck('content')
            ->all();
        return view ('pages.security.index')
            ->with('modalData', $this->modalData)
            ->with('content', $content);
    }
}
