@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-primary text-white shadow-sm">0-5 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-baby fa-2x me-3 text-primary"></i>
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
            
            .milestone-card {
                border-left: 4px solid #4285F4;
                transition: all 0.3s ease;
            }
            
            .milestone-card:hover {
                transform: translateY(-5px);
            }
        </style>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <span class="fw-bold">Información de Salud para Bebés</span>
                </div>
                <div class="card-body p-4">
                    <p class="lead mb-4">Este portal ofrece información específica para el cuidado de la salud de bebés entre 0 y 5 años:</p>
                    
                    <div class="milestone-card bg-light p-3 rounded mb-3 shadow-sm">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <span class="badge rounded-circle bg-primary p-2">
                                    <i class="fas fa-syringe"></i>
                                </span>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Calendario de vacunas</h5>
                                <p class="mb-0 text-muted">Vacunas esenciales para la protección de tu bebé según su edad</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="milestone-card bg-light p-3 rounded mb-3 shadow-sm">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <span class="badge rounded-circle bg-success p-2">
                                    <i class="fas fa-utensils"></i>
                                </span>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Alimentación</h5>
                                <p class="mb-0 text-muted">Guía nutricional desde la lactancia hasta la alimentación complementaria</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="milestone-card bg-light p-3 rounded mb-3 shadow-sm">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <span class="badge rounded-circle bg-warning p-2">
                                    <i class="fas fa-child"></i>
                                </span>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Desarrollo</h5>
                                <p class="mb-0 text-muted">Hitos del desarrollo motor, cognitivo y del lenguaje por etapas</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="milestone-card bg-light p-3 rounded mb-3 shadow-sm">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <span class="badge rounded-circle bg-info p-2">
                                    <i class="fas fa-hands-wash"></i>
                                </span>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Cuidados básicos</h5>
                                <p class="mb-0 text-muted">Recomendaciones para el baño, sueño, higiene y seguridad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/200" alt="Bebés" class="img-fluid rounded-circle mb-3 border border-4 border-primary">
                        <h4 class="fw-bold text-primary">Etapa crucial de desarrollo</h4>
                        <p class="text-muted">Los primeros 5 años son fundamentales para el desarrollo futuro</p>
                    </div>
                    
                    <div class="alert alert-primary border-0">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-circle fa-2x me-3"></i>
                            </div>
                            <div>
                                <h5 class="alert-heading">¡Importante!</h5>
                                <p class="mb-0">Las visitas regulares al pediatra son esenciales para el seguimiento del crecimiento y desarrollo de tu bebé.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-light border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                <i class="fas fa-calendar-check text-primary me-2"></i> 
                                Visitas recomendadas
                            </h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    0-6 meses
                                    <span class="badge bg-primary rounded-pill">Mensual</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    6-12 meses
                                    <span class="badge bg-primary rounded-pill">Bimestral</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    1-3 años
                                    <span class="badge bg-primary rounded-pill">Trimestral</span>
                                </li>
                                <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                                    3-5 años
                                    <span class="badge bg-primary rounded-pill">Semestral</span>
                                </li>
                            </ul>
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
