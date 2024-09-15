<?php

namespace App\Http\Controllers;

use App\Models\Legacy;
use Illuminate\Http\Request;

class LegacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Legacy::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $legacy = Legacy::create($request->all());
        return $legacy;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $legacy = Legacy::findOrFail($id);
        return $legacy;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $legacy = Legacy::findOrFail($id);
        $legacy->update($request->all());
        return $legacy;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $legacy = Legacy::findOrFail($id);
        $legacy->delete();
    }
}
