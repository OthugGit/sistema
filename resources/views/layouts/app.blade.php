<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios - UPTex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('usuarios.index') }}">CRUD Usuarios</a>
            <a href="{{ route('usuarios.create') }}" class="btn btn-light">Nuevo</a>
        </div>
    </nav>
    <div class="container">@yield('content')</div>
</body>
</html>