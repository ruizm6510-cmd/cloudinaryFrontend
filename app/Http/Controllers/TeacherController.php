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
        $teachers = Teacher::find($id);

        return view('teacher.show', compact('teachers'));
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
        $teacher = Teacher::create($request->all());

        return redirect()->route('teacher.list');
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
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());

        return redirect()->route('teacher.list');
    }

    // Eliminar profesor
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.list');
    }
}


