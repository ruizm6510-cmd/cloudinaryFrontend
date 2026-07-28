@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del centro de formacion#{{ $training->id}}</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $training->id}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre:</label>
                <p class="fs-5">{{ $training->name}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Locacion:</label>
                <p class="fs-5">{{ $training->location}}</p>
            </div>

           
        <div class="card-footer text-end">
            <a href="{{ route('training.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection