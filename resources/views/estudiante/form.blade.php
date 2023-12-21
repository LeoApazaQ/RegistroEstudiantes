@extends('layouts.app')

@section('title')
    Registro de estudiantes
@endsection

@section('content')


        <div class="container m-5 rounded p-4 shadow-sm bg-white">

            <h2>Datos personales</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('estudiante.store') }}" method="post">
                @csrf
                <div class="form-group col-md-6">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" name="nombre" class="form-control" id="nombreCompleto" placeholder="Nombres, Apellidos" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="dni">DNI</label>
                        <input type="number" name="dni" class="form-control" id="dni" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="number" name="telefono" class="form-control" id="telefono" required>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="fechaNacimiento" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="direccionCalle">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="direccionCalle" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="estado">Provincia</label>
                        <input type="text" name="provincia" class="form-control" id="estado" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="correoElectronico">Correo Electrónico</label>
                    <input type="email" name="correo" class="form-control" id="correoElectronico" required>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

@endsection
