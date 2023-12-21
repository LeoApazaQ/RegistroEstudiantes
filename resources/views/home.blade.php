@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


            </div>

            <div>
                <h3>usuarios</h3>
                <div>
                    <a href="{{ route("admin.users.index") }}">Usuarios</a>
                </div>
                <h3>roles</h3>
                <div>
                    <a href="{{ route("admin.roles.index") }}">Roles</a>
                </div>
                <h3>Permisos</h3>
                <div>
                    <a href="{{ route("admin.permisos.index") }}">Permisos</a>
                </div>
                <div>
                    <h3>Estudiante</h3>
                    @can('Crear estudiante')
                    <a class="btn btn-group btn-info" href="{{ route("estudiante.create") }}">Crear</a>
                    @endcan
                    <a class="btn btn-group btn-primary" href="{{ route("estudiante.index") }}">estudiantes</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
