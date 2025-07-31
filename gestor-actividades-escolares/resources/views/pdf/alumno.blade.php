<!DOCTYPE html>
<html>
<head>
    <title>Listado de Alumnos</title>
    <style>
        body { font-family: DejaVu Sans; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #000; text-align: left; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Listado de Alumnos</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->curso }}</td>
                <td>{{ $alumno->edad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
