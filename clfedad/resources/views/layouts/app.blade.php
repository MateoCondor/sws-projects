<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ?? 'Portal de Salud por Edad' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4285F4;
            --secondary-color: #34A853;
            --accent-color: #FBBC05;
            --danger-color: #EA4335;
            --light-color: #F8F9FA;
            --dark-color: #202124;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            padding-top: 30px;
            color: #333;
            line-height: 1.6;
        }
        
        .contenedor-principal {
            max-width: 900px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        
        .contenedor-principal::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
        }
        
        .header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
            position: relative;
        }
        
        .header h1 {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 2.2rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 2px 5px rgba(66, 133, 244, 0.2);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #3367d6;
            border-color: #3367d6;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(66, 133, 244, 0.3);
        }
        
        .card {
            border: none;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            font-weight: 500;
            padding: 15px 20px;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ddd;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.25);
            border-color: var(--primary-color);
        }
        
        .footer {
            margin-top: 40px !important;
            padding-top: 20px !important;
            border-top: 1px solid #eee;
            color: #777;
            font-size: 0.9rem;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        @media (max-width: 768px) {
            .contenedor-principal {
                margin: 0 15px;
                padding: 20px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contenedor-principal">
            <div class="header">
                <h1>
                    <i class="fas fa-heartbeat me-2"></i>
                    {{ $titulo ?? 'Portal de Salud por Edad' }}
                </h1>
            </div>
            
            <div class="content">
                @yield('contenido')
            </div>

            <div class="footer mt-4 pt-3 text-center text-muted">
                <p>
                    <i class="fas fa-shield-alt me-1"></i> 
                    Información médica confiable 
                    <span class="mx-2">|</span> 
                    <i class="fas fa-user-md me-1"></i> 
                    Revisado por profesionales
                </p>
                <p>&copy; {{ date('Y') }} Portal de Salud por Edad</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
