@extends('layouts.app')

@section('content')
    <h1>Actualizar centro</h1>

    <form action="{{ route('training_center.update', $center->id) }}" method="POST">

        @csrf
        @method('PUT')


        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $center->name) }}">
         </label>
        <br><br>
         <label>
            Ubicacion:
            <br>
            <input type="text" name="location" value="{{ old('name', $center->location) }}">
         </label>

        <br><br>
        <button type="submit" class="btn btn-success">Actualizar centro</button>


    </form>
@endsection