@extends('layouts.app')

@section('content')

    <h1>LISTA AREA</h1>

    <div class="container">

        {{-- Botón para crear una nueva área --}}
        <a href="{{ route('area.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nueva Area
        </a>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($areas as $area)

                    <tr>
                        <td>{{ $area->id }}</td>

                        <td>{{ $area->name }}</td>

                        {{-- Mostrar --}}
                        <td>
                            <a href="{{ route('area.show', $area->id) }}">
                                Mostrar
                            </a>
                        </td>

                        {{-- Editar --}}
                        <td>
                            <a href="{{ route('area.edit', $area->id) }}">
                                Editar
                            </a>
                        </td>

                        {{-- Eliminar --}}
                        <td>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-success">
                                    Eliminar Area
                                </button>

                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection