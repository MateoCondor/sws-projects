@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-secondary text-white">
            Información de Salud para Adultos Mayores
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de adultos mayores entre 60 y 74 años:</p>
            <ul>
                <li>Cuidados de salud preventivos</li>
                <li>Nutrición adaptada</li>
                <li>Ejercicios recomendados</li>
                <li>Bienestar emocional</li>
                <li>Manejo de enfermedades crónicas</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
