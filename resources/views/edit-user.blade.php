<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4b0082;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .form-label {
            color: #4b0082;
        }
        .form-control:focus {
            border-color: #6a5acd;
            box-shadow: 0 0 0 0.2rem rgba(106, 90, 205, 0.25);
        }
        .btn-primary {
            background-color: #4b0082;
            border-color: #4b0082;
        }
        .btn-primary:hover {
            background-color: #6a5acd;
            border-color: #6a5acd;
        }
        .text-danger {
            color: #8b008b !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Editar Usuario</div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('edit-user', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" placeholder="Ingrese su Nombre Completo" value="{{ $user->nombre_completo }}">
                        @error('nombre_completo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su Email" value="{{ $user->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="numero_telefono" class="form-label">Número de Teléfono</label>
                        <input type="number" name="numero_telefono" class="form-control" id="numero_telefono" placeholder="Ingrese su Número de Teléfono" value="{{ $user->numero_telefono }}">
                        @error('numero_telefono')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
