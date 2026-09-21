<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function consultaArea()
    {
        $curso = Course::find(2);

        return $curso->area;
    }

    public function consultaCentro()
    {
        $curso = Course::find(1);

        return $curso->training_center;
    }

    public function consultaAprendiz()
    {
        $curso = Course::find(1);

        return $curso->aprendices;
    }

    public function consultaProfe()
    {
        $curso = Course::find(1);

        return $curso->teachers;
    }

    // Formulario para crear curso
    public function create()
    {
        $areas = Area::all();
        $centers = Training_center::all();

        return view('course.create', compact('areas', 'centers'));
    }

    // Guardar curso
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'day' => 'required|string|max:50',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course = Course::create($validated);

        return response()->json($course, 201);
    }

    // Lista de cursos
    public function index()
    {
        $courses = Course::all();

        return response()->json($courses, 200);
    }

    // Mostrar curso
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return response()->json($course, 200);
    }

    // Editar curso
    public function edit(Course $course)
    {
        $areas = Area::all();
        $centers = Training_center::all();

        return view(
            'course.edit',
            compact('course', 'areas', 'centers')
        );
    }

    // Actualizar curso
    public function update(Request $request,$id)
    {
        $course = Course::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'day' => 'required|string|max:50',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course->update($validated);

        return response()->json($course, 200);
    }

    

    // Eliminar curso
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}