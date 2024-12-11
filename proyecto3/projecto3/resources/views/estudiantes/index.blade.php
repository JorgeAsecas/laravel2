<!-- resources/views/alumnos/index.blade.php -->

<x-layout>
    <!-- Establecer título de la página -->
    @php $title = 'Lista de Alumnos'; @endphp

    <!-- Inyectar contenido en el layout -->
    <h1>Lista de Alumnos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td>
                        <a href="{{ url('/estudiantes/' . $estudiante->id) }}">Ver Notas</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div>
        {{ $estudiantes->links() }}
    </div>
</x-layout>
