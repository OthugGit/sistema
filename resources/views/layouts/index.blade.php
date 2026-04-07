@extends('layouts.app')
@section('content')
    <h1>Lista</h1>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <table class="table">
        <thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach($usuarios as $u)
            <tr>
                <td>{{ $u->id }}</td><td>{{ $u->nombre }}</td><td>{{ $u->email }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $u) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('usuarios.destroy', $u) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">X</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection