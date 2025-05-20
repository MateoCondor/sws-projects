@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-info text-white">
            Información de Salud para Jóvenes Adultos
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de jóvenes adultos entre 18 y 25 años:</p>
            <ul>
                <li>Salud preventiva</li>
                <li>Nutrición y ejercicio</li>
                <li>Salud mental</li>
                <li>Educación sexual y reproductiva</li>
                <li>Manejo del estrés</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
