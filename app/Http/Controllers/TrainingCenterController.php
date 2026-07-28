<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // consulta de que profesores hay en cada centro
    public function consultaProfesores(){
        $centro = Training_center::find(4);
        return $centro->teachers;
    }
    // consulta, en que centro de formacion se da un curso
    public function consultaCursos(){
        $centro = Training_center::find(1);
        return $centro->courses;
    }
     public function create (){

     return view('training_center.create');


    }

    public function store(Request $request){

    $center = new Training_center();

     $center=Training_center::create($request->all());

    return $center;
   }
    public function index(){

    $trainings = Training_center::all();
    return view('training_center.index',compact('trainings'));

    }

     public function show($id){
    $training = Training_center::find($id);
    return view ('training_center.show', compact('training'));
    }

}