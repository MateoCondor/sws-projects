<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ATAQUE XSS!</div>
                    <div class="card-body">
                        <h1 class="text-center">ATAQUE XSS!</h1>
                        
                    </div>
                </div>
                
                <!-- Formulario para guardar contenido -->
                <div class="card mt-4">
                    <div class="card-header">Guardar Contenido</div>
                    <div class="card-body">
                        <form action="{{ route ('noticias.guardar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="contenido">Ingrese su texto:</label>
                                <textarea class="form-control" id="contenido" name="contenido" rows="4" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>

                        <hr>

                        @foreach ($noticias as $n)
                            <li>
                                {!! $n->contenido !!}
                                
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>