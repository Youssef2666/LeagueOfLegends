<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ability::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ability = Ability::create($request->all());
        return $ability;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ability = Ability::findOrFail($id);
        return $ability;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ability = Ability::findOrFail($id);
        $ability->update($request->all());
        return $ability;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ability = Ability::findOrFail($id);
        $ability->delete();
    }
}
