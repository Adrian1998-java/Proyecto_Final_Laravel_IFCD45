@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white fw-bold">
                    Añadir nuevo Alumno
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumnos.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                            @error('nombre')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Curso</label>
                            <input type="text" name="curso" class="form-control" value="{{ old('curso') }}">
                            @error('curso')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Edad</label>
                            <input type="number" name="edad" class="form-control" value="{{ old('edad') }}">
                            @error('edad')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Guardar alumno</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">← Volver al listado</a>
            </div>
        </div>
    </div>
</div>
@endsection
