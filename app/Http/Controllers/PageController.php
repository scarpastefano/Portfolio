<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
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
    
    public function dashboard(){

        $posts = Post::all();
        $users = User::all();
        return view('dashboard', compact('posts', 'users'));
    }
}
