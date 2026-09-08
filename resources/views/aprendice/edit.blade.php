@extends('layouts.app')

@section('content')

    <h1>Actualizar aprendiz</h1>

    <form action="{{ route('aprendice.update', $aprendice) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $aprendice->name) }}">
        </label>
        <br>

        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email', $aprendice->email) }}">
        </label>
        <br>

        <label>
            Número de celular:
            <br>
            <input type="text" name="cell_number" value="{{ old('cell_number', $aprendice->cell_number) }}">
        </label>
        <br>

        <label>
            Curso:
            <br>
            <select name="course_id">

                <option value="">Seleccione un curso</option>

                @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ $aprendice->course_id == $course->id ? 'selected' : '' }}>

                        {{ $course->id }} - {{ $course->name }}

                    </option>
                @endforeach

            </select>
        </label>
        <br>

        <label>
            Computador:
            <br>
            <select name="computer_id">

                <option value="">Seleccione un computador</option>

                @foreach ($computers as $computer)
                    <option value="{{ $computer->id }}"
                        {{ $aprendice->computer_id == $computer->id ? 'selected' : '' }}>

                        {{ $computer->number }} - {{ $computer->brand }}

                    </option>
                @endforeach

            </select>
        </label>

        <br><br>

        <button type="submit" class="btn btn-success">
            Actualizar Aprendiz:
        </button>

    </form>

@endsection