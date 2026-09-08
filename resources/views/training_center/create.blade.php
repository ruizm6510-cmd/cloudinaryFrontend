
@extends('layouts.app') 
 
@section('content') 
 
<h1>formulario training center</h1> 
 
<form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data"> 
 
@csrf 
 
<label> 
    Nombre: 
    <br> 
    <input type="text" name="name"> 
</label> 
<br> 
<br> 
 
<label> 
    Location: 
    <br> 
    <input type="text" name="location"> 
</label> 
<br> 
<br> 
 
<button type="submit">Enviar Formulario:</button> 
 
</form> 
 
@endsection

