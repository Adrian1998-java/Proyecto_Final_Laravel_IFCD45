@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Ajusta el ancho -->
            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white fw-bold">
                    Crear Nueva Actividad
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('actividades.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                            @error('nombre')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}">
                            @error('descripcion')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Día de la Semana</label>
                            <select class="form-select" name="dia_semana">
                                <option value="">Selecciona un día</option>
                                <option value="Lunes" {{ old('dia_semana') == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                                <option value="Martes" {{ old('dia_semana') == 'Martes' ? 'selected' : '' }}>Martes</option>
                                <option value="Miércoles" {{ old('dia_semana') == 'Miércoles' ? 'selected' : '' }}>Miércoles</option>
                                <option value="Jueves" {{ old('dia_semana') == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                                <option value="Viernes" {{ old('dia_semana') == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                                <option value="Sábado" {{ old('dia_semana') == 'Sábado' ? 'selected' : '' }}>Sábado</option>
                                <option value="Domingo" {{ old('dia_semana') == 'Domingo' ? 'selected' : '' }}>Domingo</option>
                            </select>
                            @error('dia_semana')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Horario</label>
                            <select class="form-select" name="horario">
                                <option value="">Selecciona un horario</option>
                                @foreach ([
                                    '8 am-9 am','9 am-10 am','10 am-11 am','11 am-12 pm',
                                    '12 pm-13 pm','13 pm-14 pm','15 pm-16 pm','16 pm-17 pm',
                                    '17 pm-18 pm','18 pm-19 pm'
                                ] as $hora)
                                    <option value="{{ $hora }}" {{ old('horario') == $hora ? 'selected' : '' }}>{{ $hora }}</option>
                                @endforeach
                            </select>
                            @error('horario')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Guardar actividad</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('actividades.index') }}" class="btn btn-secondary">← Volver al listado</a>
            </div>
        </div>
    </div>
</div>
@endsection
