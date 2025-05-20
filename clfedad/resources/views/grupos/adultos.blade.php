@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info">
        <h2>{{ $mensaje }}</h2>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-dark text-white">
            Información de Salud para Adultos
        </div>
        <div class="card-body">
            <p>Este portal ofrece información específica para el cuidado de la salud de adultos entre 26 y 59 años:</p>
            <ul>
                <li>Chequeos médicos recomendados</li>
                <li>Prevención de enfermedades crónicas</li>
                <li>Alimentación equilibrada</li>
                <li>Actividad física recomendada</li>
                <li>Equilibrio trabajo-vida personal</li>
            </ul>
        </div>
    </div>

    <div class="mt-4">
        <a href="/" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
