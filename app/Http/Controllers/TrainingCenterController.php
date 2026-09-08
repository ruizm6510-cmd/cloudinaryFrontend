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

        return view('training_center.index', compact('centers'));
    }

    // Mostrar un centro de formación
    public function show($id)
    {
        $centers = Training_center::find($id);

        return view('training_center.show', compact('centers'));
    }

    // Formulario para crear un centro
    public function create()
    {
        return view('training_center.create');
    }

    // Guardar un centro
    public function store(Request $request)
    {
        $training_center = Training_center::create($request->all());

        return redirect()->route('training_center.list');
    }

    // Formulario para editar un centro
    public function edit($training_center)
    {
        $center = Training_center::findOrFail($training_center);

        return view('training_center.edit', compact('center'));
    }

    // Actualizar un centro
    public function update(Request $request, Training_center $training_center)
    {
        $training_center->update($request->all());

        return redirect()->route('training_center.list');
    }

    // Eliminar un centro
    public function destroy(Training_center $training_center)
    {
        $training_center->delete();

        return redirect()->route('training_center.list');
    }
}