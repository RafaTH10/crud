<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel 11 Crud
                <a href="/add-user" class="btn btn-success btn-sm float-end">Añadir Usuario</a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <th>S/N</th>
                        <th>Nombre Completo</th>
                        <th>Email</th>
                        <th>Número de Teléfono</th>
                        <th>Fecha de Registro</th>
                        <th>Ultima Actualización</th>
                        <th>Acciones</th>
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
                                        <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="btn btn-primary">Editar</a>
                                        <a href="{{ route('delete-user', ['id' => $user->id]) }}" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
