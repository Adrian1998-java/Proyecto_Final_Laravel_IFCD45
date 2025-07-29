<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('/alumnos', AlumnoController::class);
Route::resource('/actividades', ActividadController::class);