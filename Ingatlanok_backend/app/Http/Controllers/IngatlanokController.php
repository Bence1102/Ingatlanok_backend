<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreingatlanokRequest;
use App\Http\Requests\UpdateingatlanokRequest;
use App\Models\ingatlanok;

class IngatlanokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingatlanok=ingatlanok::with('kategoria')->get();
        return response()->json($ingatlanok);
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
    public function store(StoreingatlanokRequest $request)
    {
        $data = $request->validated();
        $ingatlan = ingatlanok::create([
            'kategoria_id'=> $data['kategoria_id'],
            'leiras'=> $data['leiras'],
            'datum'=> $data['datum'],
            'tehermentes'=> $data['tehermentes'],
            'ar'=> $data['ar'],
            'kepUrl'=> $data['kepUrl'],
        ]);
        return response()->json([
            'message'=> 'Ingatlan sikeresen létrehozva',
            'data'=> $ingatlan
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateingatlanokRequest $request, ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ingatlanok $ingatlanok)
    {
        $ingatlanok->delete();
        return response()->json([
            'message'=>'Ingatlan törlése'
        ]);
    }
}