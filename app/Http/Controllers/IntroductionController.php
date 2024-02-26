<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class IntroductionController extends Controller
{
    public function index() {
        $lang = cache('lang');
        $content = Content::where('title', 'ABOUT OIS')
            ->where('lang', $lang)
            ->orderBy('order_num')
            ->get()
            ->pluck('content')
            ->all();
        return view ('pages.introduction.index')
            ->with('modalData', $this->modalData)
            ->with('content', $content);
    }
}
