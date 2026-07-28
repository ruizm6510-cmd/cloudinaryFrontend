<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Training_center;
use App\Models\Area;

class TeacherController extends Controller
{
    // muestra que area da un profesor
    public function consultaArea(){
        $profe = Teacher::find(1);
        return $profe->area;
    }
    // muestra en que centro se encuentra el profesor
    public function consultaCentro(){
        $profe = Teacher::find(1);
        return $profe->training_center;
    }

    
    public function consultaCurso(){
        $profe = Teacher::find(1);
        return $profe->courses;
    
    }
    public function create (){
        $areas= Area::all();
        $centers=  Training_center::all();
     return view('teacher.create', compact('areas','centers'));


    }

    public function store(Request $request){

    $teach = new Teacher();

     $teach=Teacher::create($request->all());

    return $teach;
    }
     public function index(){

    $teachers = Teacher::all();
    return view('teacher.index',compact('teachers'));

    }
    public function show($id){
    $teacher = Teacher::find($id);
    return view ('teacher.show', compact('teacher'));
}

}




