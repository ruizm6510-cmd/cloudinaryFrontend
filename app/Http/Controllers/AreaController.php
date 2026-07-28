<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /*public function consultaProfe(){
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso(){
        $area = Area::find(1);
        return $area->courses;
    } */



   public function create (){

     return view('area.create');

    }

    public function store(Request $request){

    $area = new Area();
     $area=Area::create($request->all());
    return $area;

    }

    
    public function index(){

    $areas = Area::all();
    return view('area.index',compact('areas'));

    }
  public function show($id){
    $area = Area::find($id);
    return view ('area.show', compact('area'));
}
    

}
