@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Centro de formacion #{{ $centers->id }}</h5>
            <a href="{{ route('training_center.list') }}" class="btn btn-sm btn-light">Volver</a>
        </div>
        
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Id:</label>
                <p class="fs-5">{{ $centers->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Centro:</label>
                <p class="fs-5">{{ $centers->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Ubicacion:</label>
                <p class="fs-5">{{ $centers->location }}</p>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('training_center.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection