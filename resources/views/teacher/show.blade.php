@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Instructor #{{ $teachers->id }}</h5>
            <a href="{{ route('teacher.list') }}" class="btn btn-sm btn-light">Volver</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Id:</label>
                <p class="fs-5">{{ $teachers->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Profesor:</label>
                <p class="fs-5">{{ $teachers->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Correo del Profesor:</label>
                <p class="fs-5">{{ $teachers->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Area:</label>
                <p class="fs-5">{{ $teachers->area_id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Centro de Formación:</label>
                <p class="fs-5">{{ $teachers->training_center_id }}</p>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('teacher.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection