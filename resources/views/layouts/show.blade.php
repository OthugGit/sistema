@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-info text-white">
            <h1>Detalles del Usuario</h1>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>Fecha de Registro:</strong> {{ $usuario->created_at->format('d/m/Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver al listado</a>
            <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">Editar este usuario</a>
        </div>
    </div>
@endsection