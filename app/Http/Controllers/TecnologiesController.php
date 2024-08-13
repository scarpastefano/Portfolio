<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTecnologiesRequest;
use App\Http\Requests\UpdateTecnologiesRequest;
use App\Models\Tecnologies;

class TecnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnologies = Tecnologies::all();
        return view('tecnologie.index', compact('tecnologies'));
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
    public function store(StoreTecnologiesRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image') && $request->file('image')){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        };

        Tecnologies::create([
            'tecnologie' => $request->tecnologie,
            'icon' => $path_image
        ]);

        return redirect()->route('dashboard')->with('success', 'Tecnologia creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnologies $tecnologies)
    {
        return view('tecnologie.show', compact('tecnologies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnologies $tecnologies)
    {
        return view('tecnologie.edit', compact('tecnologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTecnologiesRequest $request, Tecnologies $tecnologies)
    {
        $path_image = $tecnologies->image;
        if ($request->hasFile('image') && $request->file('image')){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        };

        $tecnologies->update([
            'tecnologie' => $request->tecnologie,
            'icon' => $path_image
        ]);

        return redirect()->route('dashboard')->with('success', 'Tecnologia aggiornata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnologies $tecnologies)
    {
        $tecnologies->delete();
        session()->flash('delete', 'Tecnologie cancellata con successo');
        return redirect()->route('dashboard');
    }
}
