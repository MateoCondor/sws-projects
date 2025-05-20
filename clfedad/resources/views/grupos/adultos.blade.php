@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-dark text-white shadow-sm">26-59 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-user-tie fa-2x me-3 text-dark"></i>
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
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-md-5 bg-dark text-white p-4 d-flex flex-column justify-content-center" style="border-radius: 0.375rem 0 0 0.375rem;">
                            <h3 class="fw-bold mb-4">Información de Salud para Adultos</h3>
                            <p class="lead mb-3">Etapa de consolidación profesional y familiar</p>
                            <p class="mb-0 opacity-75">Prioriza tu salud para mantener tu calidad de vida</p>
                        </div>
                        <div class="col-md-7 p-4">
                            <p class="fw-bold text-dark mb-3">Aspectos clave para el cuidado de tu salud entre los 26 y 59 años:</p>
                            
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3 mt-1 text-dark">
                                    <i class="fas fa-stethoscope fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Chequeos médicos recomendados</h5>
                                    <p class="text-muted mb-0 small">Exámenes preventivos según edad y factores de riesgo</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3 mt-1 text-danger">
                                    <i class="fas fa-heartbeat fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Prevención de enfermedades crónicas</h5>
                                    <p class="text-muted mb-0 small">Controlar factores de riesgo para hipertensión, diabetes y otras</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3 mt-1 text-success">
                                    <i class="fas fa-carrot fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Alimentación equilibrada</h5>
                                    <p class="text-muted mb-0 small">Nutrición adaptada a tu metabolismo y necesidades energéticas</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3 mt-1 text-primary">
                                    <i class="fas fa-running fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Actividad física recomendada</h5>
                                    <p class="text-muted mb-0 small">Ejercicio regular para mantenimiento muscular y cardiovascular</p>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3 mt-1 text-info">
                                    <i class="fas fa-balance-scale fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Equilibrio trabajo-vida personal</h5>
                                    <p class="text-muted mb-0 small">Estrategias para reducir el estrés y evitar el burnout</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-dark text-white">
                    <i class="fas fa-chart-line me-2"></i> Prioridades de salud
                </div>
                <div class="card-body">
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Chequeos preventivos</span>
                            <span class="text-primary">Muy importante</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Control del estrés</span>
                            <span class="text-info">Importante</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Hábitos saludables</span>
                            <span class="text-success">Fundamental</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <div class="alert alert-secondary border-0 mt-4 mb-0">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-lightbulb text-warning me-2"></i>
                            </div>
                            <div>
                                <p class="mb-0"><strong>Consejo:</strong> Establecer rutinas preventivas en esta etapa reduce significativamente riesgos en el futuro.</p>
                            </div>
                        </div>
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
