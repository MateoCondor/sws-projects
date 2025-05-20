@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-info text-white shadow-sm">18-25 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-user-graduate fa-2x me-3 text-info"></i>
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
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-info text-white d-flex align-items-center">
                    <i class="fas fa-user-graduate me-2"></i>
                    <span class="fw-bold">Información de Salud para Jóvenes Adultos</span>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="lead">Este portal ofrece información específica para el cuidado de la salud de jóvenes adultos entre 18 y 25 años:</p>
                            
                            <div class="mt-4">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-shrink-0 bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                                        <i class="fas fa-shield-virus text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Salud preventiva</h5>
                                        <p class="text-muted mb-0">Controles regulares y vacunación recomendada</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-shrink-0 bg-success bg-opacity-10 p-2 rounded-circle me-3">
                                        <i class="fas fa-apple-alt text-success"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Nutrición y ejercicio</h5>
                                        <p class="text-muted mb-0">Hábitos saludables para tu desarrollo</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-shrink-0 bg-info bg-opacity-10 p-2 rounded-circle me-3">
                                        <i class="fas fa-brain text-info"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Salud mental</h5>
                                        <p class="text-muted mb-0">Técnicas para fortalecer tu bienestar emocional</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-shrink-0 bg-danger bg-opacity-10 p-2 rounded-circle me-3">
                                        <i class="fas fa-heart text-danger"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Educación sexual y reproductiva</h5>
                                        <p class="text-muted mb-0">Información crucial para decisiones responsables</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-shrink-0 bg-warning bg-opacity-10 p-2 rounded-circle me-3">
                                        <i class="fas fa-balance-scale text-warning"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Manejo del estrés</h5>
                                        <p class="text-muted mb-0">Estrategias para afrontar la presión académica y social</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <img src="https://via.placeholder.com/200" alt="Jóvenes adultos" class="img-fluid rounded-circle mb-3 shadow border border-4 border-info border-opacity-25">
                                    <div class="badge bg-info position-absolute bottom-0 end-0 p-2 shadow">
                                        <i class="fas fa-star me-1"></i> Etapa formativa
                                    </div>
                                </div>
                                <div class="badge bg-info p-2 px-3 fs-6 mt-2 shadow-sm">
                                    <i class="fas fa-info-circle me-1"></i> Edad: 18-25 años
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-chart-line me-2"></i> Recomendaciones prioritarias
                </div>
                <div class="card-body p-4">
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Actividad física regular</span>
                            <span class="text-primary">Muy importante</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 95%"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Alimentación balanceada</span>
                            <span class="text-info">Prioritario</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper mb-4">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Salud mental y manejo del estrés</span>
                            <span class="text-success">Fundamental</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper">
                        <p class="mb-1 d-flex justify-content-between">
                            <span>Chequeos médicos preventivos</span>
                            <span class="text-warning">Importante</span>
                        </p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-clipboard-check me-2"></i> Consejos para jóvenes adultos
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-light border-0 shadow-sm mb-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-lightbulb text-warning fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="alert-heading mb-1">Hábitos saludables</h5>
                                <p class="mb-0">Establecer hábitos saludables en esta etapa tiene un impacto significativo en tu salud futura.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-light p-3 rounded mb-3">
                        <h5 class="border-bottom pb-2 text-info"><i class="fas fa-brain me-2"></i> ¿Sabías que?</h5>
                        <p class="mb-0">Tu cerebro continúa desarrollándose hasta aproximadamente los 25 años, especialmente en las áreas relacionadas con la toma de decisiones y el control de impulsos.</p>
                    </div>
                    
                    <div class="d-flex align-items-center p-3 border rounded bg-info bg-opacity-10 mt-4">
                        <div class="flex-shrink-0 me-3">
                            <i class="fas fa-calendar-check text-info fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold">Chequeos recomendados</h5>
                            <p class="mb-0">Examen físico anual, examen dental cada 6 meses y evaluación de la visión cada 1-2 años.</p>
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
