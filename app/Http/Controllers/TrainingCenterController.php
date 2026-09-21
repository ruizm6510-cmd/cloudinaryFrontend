<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // Consulta de qué profesores hay en cada centro
    public function consultaProfesores()
    {
        $centro = Training_center::find(4);

        return $centro->teachers;
    }

    // Consulta en qué centro de formación se da un curso
    public function consultaCursos()
    {
        $centro = Training_center::find(1);

        return $centro->courses;
    }

    // Lista de centros de formación
    public function index()
    {
        $centers = Training_center::all();

        return response()->json($centers, 200);
    }

    // Mostrar un centro de formación
    public function show($id)
    {
        $center = Training_center::findOrFail($id);

        return response()->json($center, 200);
    }

    // Formulario para crear un centro
    public function create()
    {
        return view('training_center.create');
    }

    // Guardar un centro
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string|max:100',
        ]);

        $center = Training_center::create($validated);

        return response()->json($center, 201);
    }

    // Formulario para editar un centro
    public function edit($training_center)
    {
        $center = Training_center::findOrFail($training_center);

        return view('training_center.edit', compact('center'));
    }

    // Actualizar un centro
    public function update(Request $request, $id)
    {
        $center = Training_center::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string|max:100',
        ]);
         $center->update($validated);
        return response()->json($center, 200);
    }

    // Eliminar un centro
    public function destroy($id)
    {
        $center = Training_center::findOrFail($id);
        $center->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}