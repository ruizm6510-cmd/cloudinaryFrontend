<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // Muestra qué área da un profesor
    public function consultaArea()
    {
        $profe = Teacher::find(1);

        return $profe->area;
    }

    // Muestra en qué centro se encuentra el profesor
    public function consultaCentro()
    {
        $profe = Teacher::find(1);

        return $profe->training_center;
    }

    // Muestra los cursos que tiene un profesor
    public function consultaCurso()
    {
        $profe = Teacher::find(1);

        return $profe->courses;
    }

    // Lista de profesores
    public function index()
    {
        $teachers = Teacher::all();

        return response()->json($teachers, 200);
    }

    // Mostrar un profesor
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);

        return response()->json($teacher, 200);
    }

    // Formulario para crear un profesor
    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'teacher.create',
            compact('areas', 'training_centers')
        );
    }

    // Guardar profesor
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:teachers',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $teacher = Teacher::create($validated);
        return response()->json($teacher, 201);
    }

    // Formulario para editar profesor
    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.edit',
            compact('teacher', 'areas', 'training_centers')
        );
    }

    // Actualizar profesor
    public function update(Request $request,$id)
    {
        $teacher = Teacher::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:teachers,email,'.$teacher->id,
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $teacher->update($validated);

        return response()->json($teacher, 200);
    }
    
        
    

    // Eliminar profesor
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
    
       
}


