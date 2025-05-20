@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-success text-white shadow-sm">6-12 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-child fa-2x me-3 text-success"></i>
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
            
            .kid-card {
                border-radius: 15px;
                overflow: hidden;
                transition: all 0.3s ease;
            }
            
            .kid-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            }
            
            .kid-icon {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1rem;
            }
        </style>
    </div>

    <div class="row mt-4">
        <div class="col-lg-8 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success text-white d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <span class="fw-bold">Información de Salud para Niños</span>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://via.placeholder.com/100" alt="Niños" class="rounded-circle me-4 border border-3 border-success">
                        <div>
                            <h4 class="fw-bold text-success mb-2">¡Una etapa de crecimiento y aprendizaje!</h4>
                            <p class="lead mb-0">Este portal ofrece información específica para el cuidado de la salud de niños entre 6 y 12 años.</p>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="kid-card card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="kid-icon bg-success bg-opacity-10 me-3">
                                            <i class="fas fa-ruler fa-2x text-success"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0">Crecimiento y desarrollo</h5>
                                    </div>
                                    <p class="text-muted mb-0">Seguimiento de hitos de crecimiento físico y desarrollo motor durante la edad escolar.</p>
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="badge bg-success rounded-pill">Esencial</span>
                                        <a href="#" class="text-decoration-none text-success">
                                            <i class="fas fa-arrow-right"></i> Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="kid-card card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="kid-icon bg-warning bg-opacity-10 me-3">
                                            <i class="fas fa-apple-alt fa-2x text-warning"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0">Nutrición infantil</h5>
                                    </div>
                                    <p class="text-muted mb-0">Pautas para una alimentación balanceada que favorezca el desarrollo y fortalezca el sistema inmunológico.</p>
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="badge bg-warning rounded-pill">Importante</span>
                                        <a href="#" class="text-decoration-none text-warning">
                                            <i class="fas fa-arrow-right"></i> Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="kid-card card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="kid-icon bg-primary bg-opacity-10 me-3">
                                            <i class="fas fa-running fa-2x text-primary"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0">Actividad física</h5>
                                    </div>
                                    <p class="text-muted mb-0">Recomendaciones de ejercicio y juegos activos para mantener un peso saludable.</p>
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="badge bg-primary rounded-pill">Recomendado</span>
                                        <a href="#" class="text-decoration-none text-primary">
                                            <i class="fas fa-arrow-right"></i> Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="kid-card card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="kid-icon bg-info bg-opacity-10 me-3">
                                            <i class="fas fa-tooth fa-2x text-info"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0">Salud dental</h5>
                                    </div>
                                    <p class="text-muted mb-0">Cuidados bucales durante la etapa de dentición mixta y permanente.</p>
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="badge bg-info rounded-pill">Importante</span>
                                        <a href="#" class="text-decoration-none text-info">
                                            <i class="fas fa-arrow-right"></i> Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="kid-card card h-100 border-0 shadow-sm bg-light">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="kid-icon bg-danger bg-opacity-10 me-3">
                                            <i class="fas fa-brain fa-2x text-danger"></i>
                                        </div>
                                        <h5 class="fw-bold mb-0">Desarrollo cognitivo</h5>
                                    </div>
                                    <p class="text-muted mb-0">Actividades que estimulan el aprendizaje y desarrollo de habilidades intelectuales.</p>
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="badge bg-danger rounded-pill">Fundamental</span>
                                        <a href="#" class="text-decoration-none text-danger">
                                            <i class="fas fa-arrow-right"></i> Leer más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success bg-opacity-75 text-white">
                    <i class="fas fa-clipboard-list me-2"></i> Recomendaciones clave
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width:45px; height:45px;">
                                    <span class="fw-bold text-success">01</span>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-0">Chequeos anuales</h5>
                        </div>
                        <p class="text-muted ps-5 small">Visita anual al pediatra y revisión dental cada 6 meses.</p>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width:45px; height:45px;">
                                    <span class="fw-bold text-success">02</span>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-0">Al menos 60 min de actividad</h5>
                        </div>
                        <p class="text-muted ps-5 small">Ejercicio diario para mantener un peso saludable.</p>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width:45px; height:45px;">
                                    <span class="fw-bold text-success">03</span>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-0">Alimentación variada</h5>
                        </div>
                        <p class="text-muted ps-5 small">Incluir frutas, verduras y proteínas en cada comida.</p>
                    </div>
                    
                    <div class="alert alert-success border-0 mt-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-lightbulb fa-2x me-3"></i>
                            </div>
                            <div>
                                <h5 class="alert-heading mb-1">Consejo importante</h5>
                                <p class="mb-0">Establecer rutinas de sueño adecuadas es fundamental para el desarrollo infantil. Los niños de esta edad necesitan entre 9-12 horas de sueño diario.</p>
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
