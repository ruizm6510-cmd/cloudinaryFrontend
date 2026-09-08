@extends('layouts.app')

@section('content')

    <h1>Actualizar curso</h1>

    <form action="{{ route('course.update', $course) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
        </label>
        <br>

        <label>
            Area:
            <br>
            <select name="area_id">
                <option value="">Seleccione un area</option>

                @foreach ($areas as $area)
                    <option value="{{ $area->id }}"
                        {{ $course->area_id == $area->id ? 'selected' : '' }}>
                        {{ $area->id }} - {{ $area->name }}
                    </option>
                @endforeach

            </select>
        </label>
        <br>

        <label>
            Centro de formación:
            <br>
            <select name="training_center_id">
                <option value="">Seleccione un centro</option>

                @foreach ($centers as $center)
                    <option value="{{ $center->id }}"
                        {{ $course->training_center_id == $center->id ? 'selected' : '' }}>
                        {{ $center->id }} - {{ $center->name }}
                    </option>
                @endforeach

            </select>
        </label>

        <br><br>

        <button type="submit" class="btn btn-success">
            Actualizar Curso:
        </button>

    </form>

@endsection