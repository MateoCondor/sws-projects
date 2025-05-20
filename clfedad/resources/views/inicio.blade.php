@extends('layouts.app')

@section('contenido')
    <div class="text-center mb-4">
        <h2>Bienvenido al Portal de Salud por Edad</h2>
        <p class="lead">Ingrese su edad para acceder a información personalizada de salud</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Ingrese su edad
                </div>
                <div class="card-body">
                    <form action="{{ route('procesar.edad') }}" method="GET">
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad (en años):</label>
                            <input type="number" class="form-control" id="edad" name="edad" min="0" max="120" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="card">
            <div class="card-header">
                Acerca del Portal
            </div>
            <div class="card-body">
                <p>Este portal ofrece información de salud personalizada según su grupo etario. La información presentada está adaptada a las necesidades específicas de cada edad.</p>
                <p>Todos los contenidos son revisados por profesionales de la salud.</p>
            </div>
        </div>
    </div>
@endsection
