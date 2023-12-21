@extends('layouts.app')

@section('title')
    Administracion de roles
@endsection

@section('content')

    <div class="container">
        <h2>Roles</h2>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <a class="btn btn-info" href="{{ route('admin.roles.create') }}">Nuevo</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-primary " href="{{ route("admin.roles.edit", $role) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection