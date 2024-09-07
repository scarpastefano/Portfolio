<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tecnologie;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $posts = Post::take(3)->get();
        $tecnologie = Tecnologie::all();
        return view('homepage', compact('posts', 'tecnologie'));
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
        $tecnologie = Tecnologie::all();
        return view('dashboard', compact('posts', 'users', 'tecnologie'));
    }

    public function project(){
        $posts = Post::all();
        return view('project', compact('posts'));
    }
}
