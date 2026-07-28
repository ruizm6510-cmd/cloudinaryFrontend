@extends('layouts.app')

@section('content')
<h1>LISTA TRAINING_CENTER</h1>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Locacion</th>
                    
                   
            </thead>
            <tbody>
                <a href="{{ route('training_center.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Teacher
                </a>
                @foreach ($trainings as $training)
                    <tr>
                        <br>
                        <td>{{ $training->id }}</td>
                        <td>{{ $training->name }}</td>
                        <td>{{ $training->location }}</td>
                        
                        <td><a href="{{ route('training_center.show', $training->id) }}">Mostrar</a></td> 

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>






@endsection