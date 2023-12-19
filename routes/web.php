<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('estudiante.form');
});

Route::resource('/estudiante', EstudianteController::class);






