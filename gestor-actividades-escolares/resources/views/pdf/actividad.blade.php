<!DOCTYPE html>
<html>
<head>
    <title>Actividad</title>
    <style>
        body { font-family: DejaVu Sans; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #000; }
    </style>
</head>
<body>
    <h1>Listado de Actividades</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Día</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actividades as $actividad)
            <tr>
                <td>{{ $actividad->nombre }}</td>
                <td>{{ $actividad->descripcion }}</td>
                <td>{{ $actividad->dia_semana }}</td>
                <td>{{ $actividad->horario }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
