<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function consultaAprendiz()
    {
        $compu = Computer::find(3);

        return $compu->aprendices;
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $compu = Computer::create($request->all());
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $compu->urlFoto = $nombreArchivo;
        $compu->save();

        $validated = $request->validate([
            'name' => 'required|integer',
            'brand' => 'required|string|max:100',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $compu = Computer::create($validated);

        return response()->json($compu, 201);
    }

    public function index()
    {
        $computers = Computer::all();

        return response()->json($computers, 200); 
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);

        return response()->json($computer, 200);
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request,$id)
    {
        $computer = Computer::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|integer',
            'brand' => 'required|string|max:100',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $computer->update($validated);

        return response()->json($computer, 200);
    }
    

    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}