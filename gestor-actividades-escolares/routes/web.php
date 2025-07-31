<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InscripcionController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('/alumnos', AlumnoController::class);
Route::resource('/actividades', ActividadController::class);
Route::resource('/inscripciones', InscripcionController::class);

Route::get('/pdf/actividades', [ActividadController::class, 'generarActividadPDF']);
Route::get('/pdf/alumnos', [AlumnoController::class, 'generarActividadPDF']);