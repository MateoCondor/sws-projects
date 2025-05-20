@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-primary text-white shadow-sm">60-74 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-user-check fa-2x me-3 text-primary"></i>
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
        <div class="col-lg-8 mb-4">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body p-4">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-8">
                            <h3 class="fw-bold text-primary mb-2">Salud y bienestar a los 60-74 años</h3>
                            <p class="lead text-muted mb-0">Una etapa para cuidarse y disfrutar con plenitud</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <img src="https://via.placeholder.com/120" alt="Adultos mayores" class="img-fluid rounded-circle border border-4 border-white shadow">
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <p class="mb-4">Esta etapa de la vida requiere atención especial a aspectos específicos de salud para mantener una buena calidad de vida y prevenir complicaciones.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm h-100 bg-primary bg-opacity-10">
                <div class="card-body p-4 text-center">
                    <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                    <h4 class="fw-bold mb-3">Chequeos recomendados</h4>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item bg-transparent border-bottom d-flex justify-content-between px-0">
                            <span>Presión arterial</span>
                            <span class="badge bg-primary rounded-pill">Cada 3-6 meses</span>
                        </li>
                        <li class="list-group-item bg-transparent border-bottom d-flex justify-content-between px-0">
                            <span>Control glicemia</span>
                            <span class="badge bg-primary rounded-pill">Anual</span>
                        </li>
                        <li class="list-group-item bg-transparent border-bottom d-flex justify-content-between px-0">
                            <span>Densitometría ósea</span>
                            <span class="badge bg-primary rounded-pill">Cada 2 años</span>
                        </li>
                    </ul>
                    <div class="alert alert-primary border-0 mb-0">
                        <i class="fas fa-exclamation-circle me-2"></i> No descuide sus controles médicos regulares
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-secondary bg-opacity-10 d-inline-flex p-4 mb-4">
                        <i class="fas fa-notes-medical fa-3x text-secondary"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Cuidados Preventivos</h4>
                    <p class="text-muted">Exámenes médicos regulares y detección temprana de condiciones relacionadas con la edad.</p>
                    <a href="#" class="btn btn-sm btn-outline-secondary mt-2 shadow-sm">
                        <i class="fas fa-info-circle me-1"></i> Más información
                    </a>
                </div>
                <div class="card-footer bg-secondary bg-opacity-10 py-2 text-center">
                    <small class="text-muted fw-bold">Prioridad: Alta</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex p-4 mb-4">
                        <i class="fas fa-utensils fa-3x text-success"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Nutrición Adaptada</h4>
                    <p class="text-muted">Dietas equilibradas con los nutrientes esenciales para mantener la salud en esta etapa de la vida.</p>
                    <a href="#" class="btn btn-sm btn-outline-success mt-2 shadow-sm">
                        <i class="fas fa-info-circle me-1"></i> Más información
                    </a>
                </div>
                <div class="card-footer bg-success bg-opacity-10 py-2 text-center">
                    <small class="text-muted fw-bold">Prioridad: Alta</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-4 mb-4">
                        <i class="fas fa-walking fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3 fw-bold">Ejercicios Adecuados</h4>
                    <p class="text-muted">Actividades físicas que mejoran la movilidad, el equilibrio y fortalecen el sistema cardiovascular.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 shadow-sm">
                        <i class="fas fa-info-circle me-1"></i> Más información
                    </a>
                </div>
                <div class="card-footer bg-primary bg-opacity-10 py-2 text-center">
                    <small class="text-muted fw-bold">Prioridad: Media</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-info text-white d-flex align-items-center">
                    <i class="fas fa-smile me-2"></i>
                    <span class="fw-bold">Bienestar Emocional</span>
                </div>
                <div class="card-body">
                    <p>Mantener una buena salud mental es fundamental en esta etapa de la vida:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Participar en actividades sociales y comunitarias</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Mantener conexiones con amigos y familiares</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Practicar técnicas de relajación y mindfulness</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-warning text-dark d-flex align-items-center">
                    <i class="fas fa-heartbeat me-2"></i>
                    <span class="fw-bold">Manejo de Enfermedades Crónicas</span>
                </div>
                <div class="card-body">
                    <p>Estrategias para el manejo efectivo de condiciones comunes:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Seguimiento adecuado de medicación y tratamientos</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Controles médicos regulares y especializados</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                            <span>Identificación temprana de síntomas de alerta</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="alert alert-light border-0 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-lightbulb fa-2x text-warning"></i>
                    </div>
                    <div class="col">
                        <h5 class="alert-heading mb-1">Tip importante</h5>
                        <p class="mb-0">Mantenerse activo física y mentalmente contribuye significativamente a una mejor calidad de vida en esta etapa.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body bg-primary bg-opacity-10 p-3 text-center">
                    <h5 class="fw-bold"><i class="fas fa-quote-left me-2 text-primary"></i> Recuerda</h5>
                    <p class="mb-0">Nunca es tarde para adoptar hábitos saludables que mejoren tu calidad de vida.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="/" class="btn btn-secondary px-4 shadow">
            <i class="fas fa-home me-2"></i> Volver al inicio
        </a>
    </div>
@endsection
