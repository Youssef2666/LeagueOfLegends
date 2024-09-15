<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Champion::with('position', 'legacy', 'characterClass', 'abilities', 'stats', 'region')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $champion = Champion::create($request->all());
        return $champion;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $champion = Champion::findOrFail($id);
        return $champion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $champion = Champion::findOrFail($id);
        $champion->update($request->all());
        return $champion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $champion = Champion::findOrFail($id);
        $champion->delete();
    }
}
