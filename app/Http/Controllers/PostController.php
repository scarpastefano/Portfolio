<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $path_image = '';
        // if ($request->hasFile('image') && $request->file('image')){
        //     $path_name = $request->file('image')->getClientOriginalName();
        //     $path_image = $request->file('image')->storeAs('public/storage/images', $path_name);
        // };

        // Post::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image' => $path_image
        // ]);

        // return redirect()->route('dashboard')->with('success', 'Progetto creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $path_image = $post->image;
        if ($request->hasFile('image') && $request->file('image')){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        };

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path_image
        ]);

        return redirect()->route('dashboard')->with('update', 'Progetto modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash('delete', 'Progetto cancellato con successo');
        return redirect()->route('post.index');
    }
}
