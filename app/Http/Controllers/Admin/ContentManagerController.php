<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;

class ContentManagerController extends Controller
{
    public function index() {
        $contents = Content::select('title')
            ->orderBy('id')
            ->groupBy('title')
            ->get();
        $lang = cache('lang');
        return view('admin.content.index')
            ->with('contents', $contents)
            ->with('lang', $lang);
    }

    public function getContent(Request $request) {
        $lang = $request->input('langCode');
        $title = $request->input('title');
        $content = Content::where('title', $title)
            ->where('lang', $lang)
            ->get();
        return json_encode($content);
    }

    public function updateContent(Request $request) {
        $id = $request->input('contentId');
        $content = Content::where('id', $id)
            ->first();
        $content->content = $request->input('content');
        $content->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
