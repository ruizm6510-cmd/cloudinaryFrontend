<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Course;
use App\Models\Computer;

class AprendiceController extends Controller
{
    public function consultaCurso()
    {
        $aprendiz = Aprendice::find(1);

        return $aprendiz->course;
    }

    public function consultaComputador()
    {
        $aprendice = Aprendice::find(3);

        return $aprendice->computer;
    }

    // Formulario para crear aprendiz
    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('aprendice.create', compact('courses', 'computers'));
    }

    

    // Guardar aprendiz
    public function store(Request $request)
    {

         $aprendiz = Aprendice::create($request->all());
        //ADJUNTAR EL PDF
        $file=$request->file("urlFoto");

        $nombreArchivo = "foto_".time().".".$file->guessExtension();
        $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

        $aprendiz->urlFoto = $nombreArchivo;
        $aprendiz->save();

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:aprendices,email',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);

        $aprendiz = Aprendice::create($validated);

        return response()->json($aprendiz, 201);
    }

    // Lista de aprendices
    public function index()
    {
        $aprendices = Aprendice::all();

        return response()->json($aprendices, 200);
    }

    // Mostrar aprendiz
    public function show($id)
    {
        $aprendice = Aprendice::findOrFail($id);

        return response()->json($aprendice, 200);
    }

    // Editar aprendiz
    public function edit(Aprendice $aprendice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view(
            'aprendice.edit',
            compact('aprendice', 'courses', 'computers')
        );
    }

    // Actualizar aprendiz
    public function update(Request $request,$id)
    {
        $aprendice = Aprendice::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:aprendices,email,'.$aprendice->id,
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);

        $aprendice->update($validated);

        return response()->json($aprendice, 200);
    }

    // Eliminar aprendiz
    public function destroy($id){
     $aprendice = Aprendice::findOrFail($id);
        $aprendice->delete();

        return response()->json(['message' => ' Eliminado correctamente'], 200);
    }
}