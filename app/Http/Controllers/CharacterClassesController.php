<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CharacterClasses;

class CharacterClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CharacterClasses::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $characterClass = CharacterClasses::create($request->all());
        return $characterClass;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $characterClass = CharacterClasses::findOrFail($id);
        return $characterClass;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $characterClass = CharacterClasses::findOrFail($id);
        $characterClass->update($request->all());
        return $characterClass;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $characterClass = CharacterClasses::findOrFail($id);
        $characterClass->delete();
    }
}
