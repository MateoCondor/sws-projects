@extends('layouts.app')

@section('contenido')
    <div class="alert alert-info border-0 shadow-sm position-relative">
        <div class="ribbon bg-danger text-white shadow-sm">75-120 años</div>
        <div class="d-flex align-items-center">
            <i class="fas fa-user-shield fa-2x me-3 text-danger"></i>
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
            
            .feature-card {
                overflow: hidden;
                border-radius: 10px;
                transition: all 0.3s ease;
            }
            
            .feature-card:hover {
                transform: translateY(-5px);
            }
            
            .feature-icon {
                height: 65px;
                width: 65px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                margin-bottom: 1rem;
            }
        </style>
    </div>

    <div class="row mt-4 mb-4">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow-sm bg-light">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="fw-bold text-danger mb-3">Información de Salud para Personas Longevas</h3>
                            <p class="lead">Este portal ofrece información específica para el cuidado de la salud de personas longevas entre 75 y 120 años. En esta etapa de la vida, la atención personalizada y adaptada a las necesidades específicas es fundamental.</p>
                            <p>El cuidado de personas longevas requiere un enfoque integral que considere aspectos médicos, nutricionales, emocionales y sociales para garantizar una buena calidad de vida.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="https://via.placeholder.com/200" alt="Personas longevas" class="img-fluid rounded-circle border border-4 border-danger shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 feature-card">
                <div class="card-body p-4 text-center">
                    <div class="feature-icon bg-danger bg-opacity-10 mx-auto">
                        <i class="fas fa-user-md fa-2x text-danger"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Atención médica especializada</h4>
                    <p class="text-muted mb-3">Seguimiento médico regular con especialistas en geriatría, que pueden atender las condiciones específicas de esta etapa.</p>
                    <div class="bg-light p-3 rounded">
                        <span class="fw-bold text-danger">Recomendación:</span> Consultas médicas trimestrales para seguimiento integral.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 feature-card">
                <div class="card-body p-4 text-center">
                    <div class="feature-icon bg-success bg-opacity-10 mx-auto">
                        <i class="fas fa-apple-alt fa-2x text-success"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Nutrición geriátrica</h4>
                    <p class="text-muted mb-3">Dietas adaptadas a las necesidades metabólicas y de salud de personas mayores, con énfasis en la calidad y facilidad de digestión.</p>
                    <div class="bg-light p-3 rounded">
                        <span class="fw-bold text-success">Recomendación:</span> Alimentos ricos en antioxidantes y fáciles de masticar.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100 feature-card">
                <div class="card-body p-4 text-center">
                    <div class="feature-icon bg-warning bg-opacity-10 mx-auto">
                        <i class="fas fa-home fa-2x text-warning"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Adaptaciones para la vida diaria</h4>
                    <p class="text-muted mb-3">Modificaciones en el hogar y ayudas técnicas que facilitan la autonomía y reducen riesgos de accidentes domésticos.</p>
                    <div class="bg-light p-3 rounded">
                        <span class="fw-bold text-warning">Recomendación:</span> Evaluación de seguridad del hogar por especialistas.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 feature-card">
                <div class="card-body p-4 text-center">
                    <div class="feature-icon bg-primary bg-opacity-10 mx-auto">
                        <i class="fas fa-brain fa-2x text-primary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Actividades para mantener una mente activa</h4>
                    <p class="text-muted mb-3">Ejercicios cognitivos, actividades sociales y recreativas que estimulan las funciones cerebrales y previenen el deterioro cognitivo.</p>
                    <div class="bg-light p-3 rounded">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Juegos de mesa</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Lectura diaria</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Rompecabezas</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    <span>Grupos sociales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 feature-card">
                <div class="card-body p-4 text-center">
                    <div class="feature-icon bg-info bg-opacity-10 mx-auto">
                        <i class="fas fa-heart fa-2x text-info"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Bienestar físico y emocional</h4>
                    <p class="text-muted mb-3">Estrategias para mantener tanto la salud física como el bienestar emocional, incluyendo ejercicios adaptados y técnicas de relajación.</p>
                    <div class="bg-light p-3 rounded">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-info me-2"></i>
                                    <span>Yoga suave</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle text-info me-2"></i>
                                    <span>Tai Chi</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-info me-2"></i>
                                    <span>Meditación</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-info me-2"></i>
                                    <span>Hidroterapia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-danger border-0 shadow-sm mt-3">
        <div class="row align-items-center">
            <div class="col-auto">
                <i class="fas fa-phone-alt fa-2x"></i>
            </div>
            <div class="col">
                <h5 class="alert-heading mb-1">Contacto de emergencia</h5>
                <p class="mb-0">Es importante tener siempre a mano números de emergencia y contactos de familiares o cuidadores. Considere usar dispositivos de alerta médica para una respuesta rápida en caso necesario.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/" class="btn btn-secondary px-4">
            <i class="fas fa-home me-2"></i> Volver al inicio
        </a>
    </div>
@endsection
