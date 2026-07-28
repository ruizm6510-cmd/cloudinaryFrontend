@extends('layouts.app')

@section('content')
<h1>LISTA APRENDICES</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell_number</th>
                    <th>Course_id</th>
                    <th>Computer_id</th>
                    
            </thead>
            <tbody>
                <a href="{{ route('aprendice.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Aprendiz
                </a>
                @foreach ($aprendices as $aprendice)
                    <tr>
                        <br>
                        <td>{{ $aprendice->id }}</td>
                        <td>{{ $aprendice->name }}</td>
                        <td>{{ $aprendice->email }}</td>
                        <td>{{ $aprendice->cell_number }}</td>
                        <td>{{ $aprendice->course_id }}</td>
                        <td>{{ $aprendice->computer_id }}</td>

                        
                        <td><a href="{{ route('aprendice.show', $aprendice->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>



@endsection