@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white fw-bold">
                    Crear nueva Inscripción
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('inscripciones.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Alumno</label>
                            <select name="alumno_id" class="form-select">
                                <option value="">Selecciona un alumno</option>
                                @foreach ($alumnos as $alumno)
                                    <option value="{{ $alumno->id }}" {{ old('alumno_id') == $alumno->id ? 'selected' : '' }}>
                                        {{ $alumno->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('alumno_id')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Actividad</label>
                            <select name="actividad_id" class="form-select">
                                <option value="">Selecciona una actividad</option>
                                @foreach ($actividades as $actividad)
                                    <option value="{{ $actividad->id }}" {{ old('actividad_id') == $actividad->id ? 'selected' : '' }}>
                                        {{ $actividad->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('actividad_id')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Inscribir</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">← Volver al listado</a>
            </div>
        </div>
    </div>
</div>
@endsection
