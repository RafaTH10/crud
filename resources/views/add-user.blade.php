<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Añadir Nuevo Usuario</div>
            <div class="card-body">
                <form action="{{ route('add-user') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" placeholder="Ingrese su Nombre Completo" value="{{ old('nombre_completo') }}">
                        @error('nombre_completo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">EmailSDFKJSHDFJUIHSDF</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="numero_telefono" class="form-label">Número de Teléfono</label>
                        <input type="text" name="numero_telefono" class="form-control" id="numero_telefono" placeholder="Ingrese su Número de Teléfono" value="{{ old('numero_telefono') }}">
                        @error('numero_telefono')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control" id="contraseña" placeholder="Ingrese la contraseña">
                        @error('contraseña')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contraseña_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="contraseña_confirmation" class="form-control" id="contraseña_confirmation" placeholder="Confirmar contraseña">
                        @error('contraseña_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
