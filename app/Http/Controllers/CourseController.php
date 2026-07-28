<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function consultaArea(){
        $curso = Course::find(2);
        return $curso->area;
    }

    public function consultaCentro(){
        $curso = Course::find(1);
        return $curso->training_center;
    }

    public function consultaAprendiz(){
        $curso = Course::find(1);
        return $curso->aprendices;
    }

    public function consultaProfe(){
        $curso = Course::find(1);
        return $curso->teachers;
    }

    public function create (){
        $areas= Area::all();
        $centers= Training_center::all();
     return view('course.create', compact('areas','centers'));


    }

    public function store(Request $request){

    $course = new Course();

     $course=Course::create($request->all());

    return $course;
    }

    public function index(){

    $courses = Course::all();
    return view('course.index',compact('courses'));

    }

    public function show($id){
    $curso = Course::find($id);
    return view ('course.show', compact('curso'));
}

}
