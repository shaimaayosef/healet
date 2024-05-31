<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function shop(){
        return view('shop');
    }

    public function blog(){
        return view('blog');
    }
}
