<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Content;

class Controller extends BaseController
{
    protected $modalData;

    public function __construct() {
        $lang = cache('lang');
        $this->modalData[0] = Content::where('lang', $lang)
        ->where('title', 'DISCLAIMERS')
        ->where('order_num', 1)
        ->first();
        $this->modalData[1] = Content::where('lang', $lang)
        ->where('title', 'TERMS OF USE')
        ->where('order_num', 1)
        ->first();
        $this->modalData[2] = Content::where('lang', $lang)
        ->where('title', 'PRIVACY POLICY')
        ->where('order_num', 1)
        ->first();
        $this->modalData[3] = Content::where('lang', $lang)
        ->where('title', 'DATA PROJECT')
        ->where('order_num', 1)
        ->first();
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
