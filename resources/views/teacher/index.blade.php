@extends('layouts.app')

@section('content')

    <h1>LISTAR PROFESORES</h1>

    <div class="container">

        <a href="{{ route('teacher.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo instructor
        </a>

        <br>
        <br>

        <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Id Area</th>
                    <th>Id CentroFormacion</th>
                    <th>Detalle</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($teachers as $teacher)

                    <tr>

                        <td>{{ $teacher->id }}</td>

                        <td>{{ $teacher->name }}</td>

                        <td>{{ $teacher->email }}</td>

                        <td>
                            {{ $teacher->area_id }}
                        </td>

                        <td>
                            {{ $teacher->training_center_id }}
                        </td>

                        <td>
                            <a href="{{ route('teacher.show', $teacher->id) }}">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('teacher.edit', $teacher->id) }}">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-success">
                                    Eliminar Profesor
                                </button>

                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection