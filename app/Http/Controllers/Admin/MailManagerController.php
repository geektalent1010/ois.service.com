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
        $content = Content::where('title', 'MAIL')
        ->orderBy('order_num')
        ->get();
        return view('admin.mail.index')
            ->with('content', $content);
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
