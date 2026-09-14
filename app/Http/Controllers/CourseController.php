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
        $course = Course::create($request->all());

        return redirect()->route('course.list');
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
        $curso = Course::find($id);

        return view('course.show', compact('curso'));
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
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        return redirect()->route('course.list');
    }

    // Eliminar curso
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.list');
    }
}