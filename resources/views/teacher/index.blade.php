@extends('layouts.app')

@section('content')
<h1>LISTA TEACHER</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Area_id</th>
                    <th>Training_center_id</th>
                   
            </thead>
            <tbody>
                <a href="{{ route('teacher.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Teacher
                </a>
                @foreach ($teachers as $teacher)
                    <tr>
                        <br>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->area_id }}</td>
                        <td>{{ $teacher->training_center_id }}</td>
                        
                         <td><a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a></td> 

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>



@endsection