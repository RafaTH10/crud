<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4b0082;
            color: white;
        }
        .btn-success {
            background-color: #1e90ff;
            border-color: #1e90ff;
        }
        .btn-success:hover {
            background-color: #4169e1;
            border-color: #4169e1;
        }
        .table {
            border-color: #e6e6fa;
        }
        .table thead th {
            background-color: #6a5acd;
            color: white;
            border-color: #483d8b;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e6e6fa;
        }
        .btn-primary {
            background-color: #4b0082;
            border-color: #4b0082;
        }
        .btn-primary:hover {
            background-color: #8a2be2;
            border-color: #8a2be2;
        }
        .btn-danger {
            background-color: #9370db;
            border-color: #9370db;
        }
        .btn-danger:hover {
            background-color: #8b008b;
            border-color: #8b008b;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Laravel 11 Crud</h4>
                <a href="/add-user" class="btn btn-success btn-sm">Añadir Usuario</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Nombre Completo</th>
                                <th>Email</th>
                                <th>Número de Teléfono</th>
                                <th>Fecha de Registro</th>
                                <th>Ultima Actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nombre_completo }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->numero_telefono }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="{{ route('delete-user', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
