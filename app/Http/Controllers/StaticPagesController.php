<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        //return '主頁';
        return view('static_pages/home');
    }

    public function help(){
        //return '幫助頁';
        return view('static_pages/help');
    }

    public function about(){
        //return '關於頁';
        return view('static_pages/about');
    }
}
