@extends('layouts.app')

@section('title')
    Registro de rol
@endsection

@section('content')
        <div class="container rounded p-4 shadow-sm bg-white">

            <h2>ROL</h2>

            <form action="{{ route('admin.roles.store') }}" method="post">
                @csrf
                <div class="form-group col-md-6">
                    <label for="nombreCompleto">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
@endsection
