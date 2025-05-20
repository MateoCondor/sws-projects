<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo SQL Injection - Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 1000px; margin: 0 auto; }
        h1, h2, h3 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { padding: 5px; width: 300px; }
        button { padding: 8px 15px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .btn-danger { background: #f44336; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        .card-header { background: #f5f5f5; padding: 10px; margin: -15px -15px 15px; border-bottom: 1px solid #ddd; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        pre { background: #f5f5f5; padding: 10px; overflow: auto; }
        .row { display: flex; flex-wrap: wrap; margin: 0 -10px; }
        .col { flex: 1; padding: 0 10px; }
        .alert { padding: 10px; background: #dff0d8; border: 1px solid #d6e9c6; color: #3c763d; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ejemplo de SQL Injection con Productos</h1>
        
        @if(session('mensaje'))
            <div class="alert">
                {{ session('mensaje') }}
            </div>
        @endif
        
        <p>
            <a href="{{ route('productos.crearDatosEjemplo') }}">Crear datos de ejemplo</a>
        </p>
        
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Consulta Insegura (Vulnerable a SQL Injection)</h3>
                    </div>
                    <form action="{{ route('productos.buscarInseguro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Campo:</label>
                            <select name="campo" required>
                                <option value="nombre">Nombre</option>
                                <option value="precio">Precio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Valor:</label>
                            <input type="text" name="valor" required>
                            <p><small>Prueba con: <code>' OR '1'='1</code> para inyección SQL</small></p>
                        </div>
                        <button type="submit" class="btn-danger">Buscar (Inseguro)</button>
                    </form>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Consulta Segura (Protegida contra SQL Injection)</h3>
                    </div>
                    <form action="{{ route('productos.buscarSeguro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Campo:</label>
                            <select name="campo" required>
                                <option value="nombre">Nombre</option>
                                <option value="precio">Precio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Valor:</label>
                            <input type="text" name="valor" required>
                            <p><small>Prueba con: <code>' OR '1'='1</code> para ver cómo se protege</small></p>
                        </div>
                        <button type="submit">Buscar (Seguro)</button>
                    </form>
                </div>
            </div>
        </div>
        
        @if(isset($resultados))
            <div class="card">
                <div class="card-header">
                    <h3>Resultados de la consulta ({{ $tipo == 'inseguro' ? 'Método Inseguro' : 'Método Seguro' }})</h3>
                </div>
                <h4>Consulta SQL ejecutada:</h4>
                <pre>{{ $sql }}</pre>
                
                <h4>Resultados:</h4>
                @if($tipo == 'inseguro')
                    <!-- Formato simple con corchetes para el método inseguro -->
                    <pre style="background-color: #f8f8f8; padding: 10px; border: 1px solid #ddd; overflow: auto;">
@foreach($resultados as $producto)
[
    id => {{ $producto->id }},
    nombre => "{{ $producto->nombre }}",
    precio => {{ $producto->precio }},
    created_at => "{{ $producto->created_at }}",
    updated_at => "{{ $producto->updated_at }}"
],
@endforeach
                    </pre>
                @else
                    <!-- Tabla normal para el método seguro -->
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Fecha creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($resultados as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>${{ number_format($producto->precio, 2) }}</td>
                                    <td>{{ $producto->created_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center;">No se encontraron resultados</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @endif
            </div>
        @endif
    </div>
</body>
</html>