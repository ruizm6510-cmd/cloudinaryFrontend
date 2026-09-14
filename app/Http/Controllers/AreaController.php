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
        $area = Area::create($request->all());

        return redirect()->route('area.index');
    }

    public function index()
    {
        $areas = Area::all();

        return response()->json($areas, 200);
    }

    public function show($id)
    {
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

    public function edit(Area $area)
    {
        $aprendices = Aprendice::all();

        return view('area.edit', compact('area', 'aprendices'));
    }

    public function update(Request $request, Area $area)
    {
        $area->update($request->all());

        return redirect()->route('area.index');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.index');
    }
}