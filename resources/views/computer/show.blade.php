@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detalle del computador #{{ $computer->id }}</h5>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $computer->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Numero:</label>
                <p class="fs-5">{{ $computer->number }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Marca:</label>
                <p class="fs-5">{{ $computer->brand }}</p>
            </div>

        </div>

        <div class="card-footer text-end">
            <a href="{{ route('computer.list') }}" class="btn btn-secondary">
                Regresar a la lista
            </a>
        </div>

    </div>
</div>

@endsection