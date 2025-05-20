@extends('layouts.app')

@section('contenido')
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-3">Bienvenido al Portal de Salud por Edad</h2>
        <p class="lead fs-4">Ingrese su edad para acceder a información personalizada de salud</p>
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <hr class="my-4" style="width: 50%; margin: 0 auto; border-top: 2px solid #4285F4; opacity: 0.5;">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="fas fa-id-card me-2"></i>
                    <span class="fw-bold">Ingrese su edad</span>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('procesar.edad') }}" method="GET">
                        <div class="mb-4">
                            <label for="edad" class="form-label fw-medium">Edad (en años):</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="number" class="form-control form-control-lg" id="edad" name="edad" min="0" max="120" placeholder="Ej: 35" required>
                            </div>
                            <div class="form-text text-muted">
                                <i class="fas fa-info-circle me-1"></i> Ingrese un valor entre 0 y 120 años
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-arrow-right me-2"></i> Obtener información personalizada
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card border-0 bg-light">
                <div class="card-header bg-secondary text-white d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <span class="fw-bold">Acerca del Portal</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="mb-3">Este portal ofrece información de salud personalizada según su grupo etario. La información presentada está adaptada a las necesidades específicas de cada edad.</p>
                            <p class="mb-0">Todos los contenidos son revisados por profesionales de la salud para asegurar su precisión y relevancia.</p>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <i class="fas fa-user-md fa-4x text-secondary opacity-75 mb-3"></i>
                                <p class="text-muted mb-0">Información médica confiable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="alert alert-info border-0 d-flex align-items-center" role="alert">
                <i class="fas fa-lightbulb me-3 fa-2x"></i>
                <div>
                    <h5 class="alert-heading">¿Sabías que?</h5>
                    <p class="mb-0">Las necesidades de salud cambian significativamente a lo largo de nuestra vida. Conocer las recomendaciones específicas para tu edad puede ayudarte a mantener una mejor calidad de vida.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
