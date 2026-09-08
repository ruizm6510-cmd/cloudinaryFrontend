
@extends('layouts.app')

@section('content')

    <h1>LISTA COMPUTADORES</h1>

    <div class="container">

        <a href="{{ route('computer.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nuevo Computador
        </a>

        <br>
        <br>

        <table id="idComputer" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>Marca</th>
                    <th>Mostrar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($computers as $computer)

                    <tr>

                        <td>{{ $computer->id }}</td>

                        <td>{{ $computer->number }}</td>

                        <td>{{ $computer->brand }}</td>


                         <td><img
                            src="{{ asset('storage/images/' . $computer->urlFoto) }}"
                            alt="Imagen del computador"
                            width="80"
                            height="80"
                            style="object-fit: cover; border-radius: 5px;"
                        ></td>


                        {{-- Mostrar --}}
                        <td>
                            <a href="{{ route('computer.show', $computer->id) }}">
                                Mostrar
                            </a>
                        </td>

                        {{-- Editar --}}
                        <td>
                            <a href="{{ route('computer.edit', $computer->id) }}">
                                Editar
                            </a>
                        </td>

                        {{-- Eliminar --}}
                        <td>
                            <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-success">
                                    Eliminar Computador
                                </button>

                            </form>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection
```
