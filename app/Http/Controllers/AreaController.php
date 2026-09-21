<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            
        ]);
        $area = Area::create($validated);
        return response()->json($area, 201);
    }

    public function index()
    {
        $areas = Area::all();

        return response()->json($areas, 200);
    }

    public function show($id)
    {
        $area = Area::findOrFail($id);

        return response()->json($area, 200);
    }

    public function edit(Area $area)
    {
        $aprendices = Aprendice::all();

        return view('area.edit', compact('area', 'aprendices'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $area->update($validated);

        return response()->json($area, 200);
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}