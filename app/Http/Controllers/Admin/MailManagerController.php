<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;

class MailManagerController extends Controller
{
    public function index() {
        $user = Auth::guard('admin')->user();
        if(!$user->isSuperAdmin()) {
            return redirect()->route('admin.dashboard.index');
        }
        $content1 = Content::where('title', 'MAIL1')
        ->orderBy('order_num')
        ->get();
        $content2 = Content::where('title', 'MAIL2')
        ->orderBy('order_num')
        ->get();
        return view('admin.mail.index')
            ->with('content1', $content1)
            ->with('content2', $content2);
    }

    public function updateMail(Request $request) {
        $data = json_decode($request->input('data'));
        foreach($data as $dat) {
            $contentObj = Content::where('id', $dat->id)->first();
            $contentObj->content = $dat->content;
            $contentObj->save();
        }

        $res['status'] = 'success';
        return json_encode($res);
    }
}
