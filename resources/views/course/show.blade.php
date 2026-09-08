@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detalle del curso #{{ $curso->id }}</h5>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $curso->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre:</label>
                <p class="fs-5">{{ $curso->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Area:</label>
                <p class="fs-5">{{ $curso->area_id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Centro de formación:</label>
                <p class="fs-5">{{ $curso->training_center_id }}</p>
            </div>

        </div>

        <div class="card-footer text-end">
            <a href="{{ route('course.list') }}" class="btn btn-secondary">
                Regresar a la lista
            </a>
        </div>

    </div>
</div>

@endsection