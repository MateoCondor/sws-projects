@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            Información de Salud para Bebés
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de bebés entre 0 y 5 años:</p>
            <ul>
                <li>Calendario de vacunas</li>
                <li>Alimentación</li>
                <li>Desarrollo</li>
                <li>Cuidados básicos</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
