@extends('layouts.app')

@section('contenido')
    <div class="alert alert-danger">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-warning text-dark">
            Información
        </div>
        <div class="card-body">
            <p>Para acceder a nuestros servicios de salud, por favor proporcione una edad válida entre 0 y 120 años.</p>
            <p>Regrese a la página principal e intente nuevamente.</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-primary">Volver al inicio</a>
    </div>
@endsection
