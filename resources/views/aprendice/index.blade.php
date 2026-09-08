@extends('layouts.app')

@section('content')

    <h1>LISTA APRENDICES</h1>

    <div class="container">

        <a href="{{ route('aprendice.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Aprendiz
        </a>

        <br>
        <br>

        <table id="idAprendice" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($aprendices as $aprendiz)

                    <tr>

                        <td>{{ $aprendiz->id }}</td>

                        <td>{{ $aprendiz->name }}</td>

                        <td>{{ $aprendiz->email }}</td>

                        <td>{{ $aprendiz->cell_number }}</td>

                        <td>
                            {{ $aprendiz->course_id }}
                        </td>

                        <td>
                            {{ $aprendiz->computer_id }}
                        </td>
                        <td><img
                            src="{{ asset('storage/images/' . $aprendiz->urlFoto) }}"
                            alt="Imagen del computador"
                            width="80"
                            height="80"
                            style="object-fit: cover; border-radius: 5px;"
                        ></td>

                        <td>
                            <a href="{{ route('aprendice.show', $aprendiz->id) }}">
                                Mostrar
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('aprendice.edit', $aprendiz->id) }}">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('aprendice.destroy', $aprendiz->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-success">
                                    Eliminar Aprendiz
                                </button>

                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection