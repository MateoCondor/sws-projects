<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Cuentas</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4 class="mb-0">Consulta de Cuenta</h4>
            </div>
            <div class="card-body">
              <form action="{{ url('/cuentas-procesar') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input type="text" name="usuario" class="form-control" id="usuario" required>
                  <div class="form-text">Ingrese su nombre de usuario para consultar su cuenta.</div>
                </div>
                <button type="submit" class="btn btn-primary">Consultar</button>
              </form>
            </div>
          </div>

          @if(isset($cuenta))
          <div class="card mt-4">
            <div class="card-header bg-success text-white">
              <h4 class="mb-0">Datos de la Cuenta</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>Usuario:</th>
                      <td>{{ $cuenta->usuario }}</td>
                    </tr>
                    <tr>
                      <th>Saldo:</th>
                      <td>${{ $cuenta->saldo }}</td>
                    </tr>
                    <tr>
                      <th>Fecha de registro:</th>
                      <td>{{ $cuenta->created_at }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>