@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Gestor de Actividades Escolares</h1>

    <div class="row justify-content-center">
        <!-- Card Alumnos -->
        <div class="col-md-5 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Alumnos</h5>
                    <p class="card-text">Consulta, agrega y administra la información de los alumnos.</p>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-success mt-auto">Ir a Alumnos</a>
                </div>
            </div>
        </div>

        <!-- Card Actividades -->
        <div class="col-md-5 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Actividades</h5>
                    <p class="card-text">Gestiona todas las actividades escolares de manera sencilla.</p>
                    <a href="{{ route('actividades.index') }}" class="btn btn-primary mt-auto">Ir a Actividades</a>
                </div>
            </div>
        </div>
        <!-- Card Inscripciones -->
        <div class="col-md-5 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Inscripciones</h5>
                    <p class="card-text">Maneja todas las inscripciones entre alumnos y actividades.</p>
                    <a href="{{ route('inscripciones.index') }}" class="btn btn-success mt-auto">Ir a Inscripciones</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
