@extends('layouts.app')

@section('title')
    Roles y permisos
@endsection

@section('content')

    <div class="container rounded p-4 shadow-sm bg-white">
        <h2>Roles y permisos</h2>
        <div class="card">
            <div class="card-header">
                <p>{{$role->name}}</p>
            </div>
            <div class="card-body">
                <h5>Lista de permisos</h5>
                {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method'=>'put']) !!}
                @foreach ($permisos as $permiso)
                    <div>
                        <label>
                            {!! Form::checkbox('permisos[]', $permiso->id, $role->hasPermissionTo($permiso->id) ? : false, ['class'=>'mr-1']) !!}
                            {{$permiso->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar Permiso', ['class'=>'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection