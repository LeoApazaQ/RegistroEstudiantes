@extends('layouts.app')

@section('title')
    Registro de estudiantes
@endsection

@section('content')

    <div class="container">
        <h2>Lista de Usuarios</h2>



        <table class="table">
            <div class="card">
                <input type="form-control" class="input-group-text" placeholder="Ingresar nombre o correo">
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a class="btn btn-primary " href="{{ route("admin.users.edit", $usuario) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection