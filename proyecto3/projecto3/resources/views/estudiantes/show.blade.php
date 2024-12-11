<!-- resources/views/alumnos/show.blade.php -->

<x-layout>
    <!-- Establecer título de la página -->
    @php $title = 'Notas de ' . $estudiante->nombre; @endphp

    <!-- Inyectar contenido en el layout -->
    <h1>Notas de {{ $estudiante->nombre }}</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Evaluación</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            @foreach($puntos as $punto)
                <tr>
                    <td>{{ $punto->asignatura->denominacion }}</td>
                    <td>{{ $punto->evaluacion->evaluacion }}</td>
                    <td>{{ $punto->punto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/estudiantes') }}">Volver a la lista de alumnos</a>
</x-layout>
