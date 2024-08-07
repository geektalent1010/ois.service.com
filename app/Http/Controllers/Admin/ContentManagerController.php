<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;
use App\Country;
use App\AdminLog;

class ContentManagerController extends Controller
{
    public function index() {
        $user = Auth::guard('admin')->user();
        if(!$user->isSuperAdmin()) {
            return redirect()->route('admin.dashboard.index');
        }
        $contents = Content::select('title', 'id')
            ->where('order_num', 1)
            ->where('lang', 'en')
            ->where('title', '<>', 'MAIL1')
            ->where('title', '<>', 'MAIL2')
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

        AdminLog::create([
            'user_id'=>Auth::guard('admin')->user()->id,
            'action'=>'Edited Content',
        ]);

        $res['status'] = 'success';
        return json_encode($res);
    }

    public function getCountries ()
     {
        $countries = Country::where('active', 1)
            ->get();
        return json_encode($countries);
     }
}

