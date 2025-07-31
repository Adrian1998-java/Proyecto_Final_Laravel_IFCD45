@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Lista de Alumnos</h2>

    <div class="mb-3">
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Añadir Alumno</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Actividades inscritas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->curso }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>
                        @if($alumno->actividades->count())
                            <ul class="mb-0">
                                @foreach ($alumno->actividades as $actividad)
                                    <li>{{ $actividad->nombre }}</li>
                                @endforeach
                            </ul>
                        @else
                            <em>Sin inscripciones</em>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-warning me-2">Editar</a>

                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este alumno?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay alumnos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Volver al inicio</a>
</div>
@endsection
