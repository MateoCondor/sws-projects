@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-warning text-dark shadow-sm">13-17 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-child fa-2x me-3 text-warning"></i>
            <h2 class="fw-bold mb-0">{{ $mensaje }}</h2>
        </div>
        <style>
            .ribbon {
                position: absolute;
                top: -10px;
                right: 15px;
                padding: 5px 15px;
                border-radius: 15px;
                font-weight: 500;
                font-size: 0.8rem;
            }
        </style>
    </div>

    <div class="row mt-4">
        <div class="col-md-7">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-warning text-dark d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <span class="fw-bold">Información de Salud para Adolescentes</span>
                </div>
                <div class="card-body p-4">
                    <p class="lead">Este portal ofrece información específica para el cuidado de la salud de adolescentes entre 13 y 17 años:</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-light">
                                <div class="flex-shrink-0 me-3">
                                    <i class="fas fa-chart-line fa-2x text-warning"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Cambios físicos y emocionales</h5>
                                    <p class="mb-0 text-muted small">Entender los cambios de la pubertad</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-light">
                                <div class="flex-shrink-0 me-3">
                                    <i class="fas fa-brain fa-2x text-info"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Salud mental</h5>
                                    <p class="mb-0 text-muted small">Apoyo emocional y manejo del estrés</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-light">
                                <div class="flex-shrink-0 me-3">
                                    <i class="fas fa-apple-alt fa-2x text-success"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Nutrición y hábitos</h5>
                                    <p class="mb-0 text-muted small">Alimentación para un desarrollo óptimo</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-light">
                                <div class="flex-shrink-0 me-3">
                                    <i class="fas fa-shield-alt fa-2x text-danger"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Prevención de riesgos</h5>
                                    <p class="mb-0 text-muted small">Evitar conductas potencialmente peligrosas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 mb-3">
                            <div class="d-flex align-items-center p-3 border rounded shadow-sm bg-light">
                                <div class="flex-shrink-0 me-3">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Desarrollo de habilidades sociales</h5>
                                    <p class="mb-0 text-muted small">Fortalecimiento de relaciones interpersonales sanas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-lightbulb me-2"></i> Recomendaciones
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://via.placeholder.com/250" alt="Adolescentes" class="img-fluid rounded shadow-sm">
                    </div>
                    
                    <div class="alert alert-warning border-0">
                        <i class="fas fa-info-circle me-2"></i> La adolescencia es una etapa de grandes cambios y descubrimientos. Es importante mantener una comunicación abierta con los jóvenes.
                    </div>
                    
                    <div class="bg-light p-3 rounded mt-3">
                        <h5 class="border-bottom pb-2 text-primary">¿Sabías que?</h5>
                        <p class="mb-0">Los adolescentes necesitan aproximadamente 8-10 horas de sueño cada noche para un desarrollo óptimo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/" class="btn btn-secondary px-4">
            <i class="fas fa-home me-2"></i> Volver al inicio
        </a>
    </div>
@endsection
