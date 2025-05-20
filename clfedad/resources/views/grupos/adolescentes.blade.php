@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-warning text-dark">
            Información de Salud para Adolescentes
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de adolescentes entre 13 y 17 años:</p>
            <ul>
                <li>Cambios físicos y emocionales</li>
                <li>Salud mental</li>
                <li>Nutrición y hábitos saludables</li>
                <li>Prevención de conductas de riesgo</li>
                <li>Desarrollo de habilidades sociales</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
