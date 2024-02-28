<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;

class ContentManagerController extends Controller
{
    public function index() {
        $contents = Content::select('title', 'id')
            ->where('order_num', 1)
            ->where('lang', 'en')
            ->groupBy('title', 'id')
            ->orderBy('id')
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
        $isContentEditor = Auth::guard('admin')->user()->isSuperAdmin();
        if(!$isContentEditor) {
            $res['status'] = 'unauthorize';
            return json_encode($res);
        }
        $id = $request->input('contentId');
        $content = Content::where('id', $id)
            ->first();
        $content->content = $request->input('content');
        $content->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
