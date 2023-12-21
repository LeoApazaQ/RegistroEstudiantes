<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('home');
});

Route::resource('/estudiante', EstudianteController::class);

Route::resource('/users', UserController::class)->names('admin.users');
Route::resource('/roles', RoleController::class)->names('admin.roles');
Route::resource('/permisos', PermisoController::class)->names('admin.permisos');



