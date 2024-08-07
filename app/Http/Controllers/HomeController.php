<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $userData['first_name'] = 'Yu';
        $userData['last_name'] = 'Guobin';
        $userData['id'] = '123456';
        $content = Content::where('title', 'MAIL1')
            ->orderBy('order_num')
            ->get();
        if(count($content) >= 1) {
            $content[0]->content = $content[0]->content.' '.$userData['first_name'].' '.$userData['last_name'];
        }
        return view('welcome')
            ->with('userData', $userData)
            ->with('content', $content);
    }
}
