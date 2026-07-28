@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del aprendiz #{{ $aprendiz->id}}</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $aprendiz->id}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->name}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Correo:</label>
                <p class="fs-5">{{ $aprendiz->email}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Numero del aprendiz:</label>
                <p class="fs-5">{{ $aprendiz->cell_number}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Curso:</label>
                <p class="fs-5">{{ $aprendiz->course_id}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Computer:</label>
                <p class="fs-5">{{ $aprendiz->computer_id}}</p>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('aprendice.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection