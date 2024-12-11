<!-- resources/views/alumnos/index.blade.php -->

<x-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3x1 font-semibold mb-4">Listado alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary inline-block bg-blue-500 text-white px-4 py-2 rounded-md mb-4 hover:bg-blue-600">Agregar alumno</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a>
                            <form method="POST" action="{{ route('alumnos.destroy', $alumno->id) }}" onsubmit="return confirm('¿Estás seguro de eliminar este alumno?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
            @endforeach
            </table>
    </div>
</x-layout>
