<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class IntroductionController extends Controller
{
    public function index() {
        $content = Content::where('order_num', 1)
        ->get()
        ->pluck('content')
        ->all();
        return view ('pages.introduction.index')
            ->with('content', $content);
    }
}
