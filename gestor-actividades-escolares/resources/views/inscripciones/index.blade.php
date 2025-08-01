@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white fw-bold">
                    Listado de Inscripciones
                </div>
                <div class="card-body">
                    <a href="{{ route('inscripciones.create') }}" class="btn btn-success mb-3">
                        + Nueva inscripción
                    </a>

                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Alumno</th>
                                <th>Actividad</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($inscripciones as $inscripcion)
                                <tr>
                                    <td>{{ $inscripcion->alumno->nombre }}</td>
                                    <td>{{ $inscripcion->actividad->nombre }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta inscripción?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">No hay inscripciones registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $inscripciones->links() }}
                    </div>

                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('index') }}" class="btn btn-secondary">← Volver al inicio</a>
            </div>
        </div>
    </div>
</div>
@endsection
