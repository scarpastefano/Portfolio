<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function aboutme(){
        return view('aboutme');
    }

    public function contacts(){
        return view('contacts');
    }
}
