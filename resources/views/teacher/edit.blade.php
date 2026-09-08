@extends('layouts.app')

@section('content')
    <h1>Actualizar profesor</h1>

    <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">

        @csrf
        @method('PUT')



        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name',$teacher->name) }}">
        </label>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email',$teacher->email) }}">
        </label>

        <br><br>
        <label class="form-label">Area</label>

        <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $teacher->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label class="form-label">Centro de formacion</label>

        <select name="training_center_id" class="form-select">
            @foreach ($training_centers as $center)
                <option value="{{ $center->id }}" {{ $teacher->training_center_id == $center->id ? 'selected' : '' }}>
                    {{ $center->id }} - {{ $center->name }}
                </option>
            @endforeach
        </select>

        <br><br>
        <button type="submit" class="btn btn-success">Actualizar profesor</button>


    </form>
@endsection