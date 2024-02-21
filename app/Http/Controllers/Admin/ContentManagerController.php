<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;

class ContentManagerController extends Controller
{
    public function index() {
        $contents = Content::orderBy('order_num')
            ->select('order_num', 'title')
            ->groupBy('order_num', 'title')
            ->orderBy('order_num')
            ->get();
        return view('admin.content.index')
            ->with('contents', $contents);
    }

    public function getContent(Request $request) {
        $id = $request->input('contentId');
        $content = Content::where('order_num', $id)->get();
        return json_encode($content);
    }

    public function updateContent(Request $request) {
        $id = $request->input('contentId');
        $content = Content::where('id', $id)->first();
        $content->content = $request->input('content');
        $content->save();
        $res['status'] = 'success';
        return json_encode($res);
    }
}
