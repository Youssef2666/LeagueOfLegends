<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Stat::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stats = Stat::create($request->all());
        return $stats;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stats = Stat::findOrFail($id);
        return $stats;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stats = Stat::findOrFail($id);
        $stats->update($request->all());
        return $stats;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stats = Stat::findOrFail($id);
        $stats->delete();
    }
}
