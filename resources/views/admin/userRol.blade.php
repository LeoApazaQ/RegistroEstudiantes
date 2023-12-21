@extends('layouts.app')

@section('title')
    Usuarios y roles
@endsection

@section('content')

    <div class="container rounded p-4 shadow-sm bg-white">
        <h2>Usuarios y roles</h2>
        <div class="card">
            <div class="card-header">
                <p>{{$user->name}}</p>
            </div>
            <div class="card-body">
                <h5>Lista de roles</h5>
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method'=>'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, $user->hasAnyRole($role->id) ? : false, ['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar Roles', ['class'=>'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection