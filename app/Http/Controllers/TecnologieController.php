<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTecnologieRequest;
use App\Http\Requests\UpdateTecnologieRequest;
use App\Models\Tecnologie;

class TecnologieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnologie = Tecnologie::all();
        return view('tecnologie.index', compact('tecnologie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tecnologie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTecnologieRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image') && $request->file('image')){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        };

        Tecnologie::create([
            'name' => $request->name,
            'icon' => $path_image
        ]);

        return redirect()->route('dashboard')->with('success', 'Tecnologia creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnologie $tecnologie)
    {
        return view('tecnologie.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnologie $tecnologie)
    {
        return view('tecnologie.edit', compact('tecnologie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTecnologieRequest $request, Tecnologie $tecnologie)
    {
        $path_image = $tecnologie->icon;
        if ($request->hasFile('icon') && $request->file('icon')){
            $path_name = $request->file('icon')->getClientOriginalName();
            $path_image = $request->file('icon')->storeAs('public/images', $path_name);
        };

        $tecnologie->update([
            'name' => $request->name,
            'icon' => $path_image
        ]);

        return redirect()->route('dashboard')->with('update', 'Tecnologia modificata con successo');
    }

    public function destroy(Tecnologie $tecnologie)
    {
        $tecnologie->delete();
        session()->flash('delete', 'Tecnologia cancellata con successo');
        return redirect()->route('dashboard');
    }
}
