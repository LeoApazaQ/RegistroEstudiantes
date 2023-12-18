<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Models\Estudiante;

Route::get('/', function () {
    return view('estudiante.form');
});

Route::resource('/estudiante', EstudianteController::class);





