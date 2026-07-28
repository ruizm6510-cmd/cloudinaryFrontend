@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del profe #{{ $teacher->id}}</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $teacher->id}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Numero de teacher:</label>
                <p class="fs-5">{{ $teacher->name}}</p>
            </div>
             <div class="mb-3">
                <label class="form-label text-muted fw-bold">Email:</label>
                <p class="fs-5">{{ $teacher->email}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Id Area:</label>
                <p class="fs-5">{{ $teacher->area_id}}</p>
            </div>
             <div class="mb-3">
                <label class="form-label text-muted fw-bold">Id training_center:</label>
                <p class="fs-5">{{ $teacher->training_center_id}}</p>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('course.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection