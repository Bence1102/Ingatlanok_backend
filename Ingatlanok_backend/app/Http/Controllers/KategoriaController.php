<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekategoriaRequest;
use App\Http\Requests\UpdatekategoriaRequest;
use App\Models\kategoria;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategoriak = Kategoria::all();

        
        return view('kategoria.index', ['kategoriak' => $kategoriak]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekategoriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoria $kategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategoria $kategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekategoriaRequest $request, kategoria $kategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoria $kategoria)
    {
        //
    }
}
