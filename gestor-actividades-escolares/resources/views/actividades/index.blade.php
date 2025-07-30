@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Listado de Actividades</h1>

     <div class="mb-3">
        <a href="{{ route('actividades.create') }}" class="btn btn-primary">Crear actividad</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Día de la Semana</th>
                <th>Horario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($actividades as $actividad)
                <tr>
                    <td>{{ $actividad->id }}</td>
                    <td>{{ $actividad->nombre }}</td>
                    <td>{{ $actividad->descripcion }}</td>
                    <td>{{ empty($actividad->dia_semana) ? 'Sin definir' : $actividad->dia_semana }}</td>
                    <td>{{ $actividad->horario }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('actividades.edit',['actividade'=>$actividad->id]) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay actividades registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Volver al inicio</a>
</div>
@endsection
