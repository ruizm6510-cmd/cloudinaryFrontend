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

        return redirect()->route('aprendice.list');

    }

    // Lista de aprendices
    public function index()
    {
        $aprendices = Aprendice::all();

        return view('aprendice.index', compact('aprendices'));
    }

    // Mostrar aprendiz
    public function show($id)
    {
        $aprendiz = Aprendice::find($id);

        return view('aprendice.show', compact('aprendiz'));
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
    public function update(Request $request, Aprendice $aprendice)
    {
        $aprendice->update($request->all());

        return redirect()->route('aprendice.list');
    }

    // Eliminar aprendiz
    public function destroy(Aprendice $aprendice)
    {
        $aprendice->delete();

        return redirect()->route('aprendice.list');
    }
}