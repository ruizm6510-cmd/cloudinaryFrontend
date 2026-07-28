<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Course;
use App\Models\Computer;

class AprendiceController extends Controller
{
    public function consultaCurso(){
        $aprendiz = Aprendice::find(1);
        return $aprendiz->course;
    }

    public function consultaComputador(){
        $aprendice = Aprendice::find(3);
        return $aprendice->computer;
    }
    public function create (){
        $courses= Course::all();
        $computers=  Computer::all();
     return view('aprendice.create', compact('courses','computers'));


    }

    public function store(Request $request){

    $aprendiz = new Aprendice();

     $aprendiz=Aprendice::create($request->all());

    return $aprendiz;
    }
         public function index(){

    $aprendices = Aprendice::all();
    return view('aprendice.index',compact('aprendices'));

    }

    public function show($id){
    $aprendiz = Aprendice::find($id);
    return view ('aprendice.show', compact('aprendiz'));
}
    
}
