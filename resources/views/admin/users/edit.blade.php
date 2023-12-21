@extends('layouts.app')

@section('title')
    Registro de estudiantes
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{ $usuario->name }}</p>

            

        </div>
    </div>


@endsection