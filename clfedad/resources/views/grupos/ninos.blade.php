@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Información de Salud para Niños
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de niños entre 6 y 12 años:</p>
            <ul>
                <li>Crecimiento y desarrollo</li>
                <li>Nutrición infantil</li>
                <li>Actividad física</li>
                <li>Salud dental</li>
                <li>Desarrollo cognitivo</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
