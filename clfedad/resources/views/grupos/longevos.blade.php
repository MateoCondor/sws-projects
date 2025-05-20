@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-danger text-white">
            Información de Salud para Personas Longevas
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de personas longevas entre 75 y 120 años:</p>
            <ul>
                <li>Atención médica especializada</li>
                <li>Nutrición geriátrica</li>
                <li>Adaptaciones y apoyos para la vida diaria</li>
                <li>Actividades para mantener una mente activa</li>
                <li>Bienestar físico y emocional</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
