<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $champions = Champion::query()
            ->when($request->search, function (Builder $builder) use ($request) {
                $builder->where('name', 'like', "%{$request->search}%")
                        ->orWhere('title', 'like', "%{$request->search}%");
            })
            ->when($request->region_id, function (Builder $builder) use ($request) {
                $builder->where('region_id', $request->region_id);
            })
            ->when($request->position_id, function (Builder $builder) use ($request) {
                $builder->where('position_id', $request->position_id);
            })
            ->with('position', 'legacy', 'characterClass', 'abilities', 'stats', 'region')
            ->get();
        return $champions;
    }

    public function championInfo(string $id){
        $champion = Champion::findOrFail($id)->with('position', 'legacy', 'characterClass', 'abilities', 'stats', 'region')->get();
        return $champion;
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
