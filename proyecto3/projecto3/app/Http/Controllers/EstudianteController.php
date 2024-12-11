<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Punto;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Método para mostrar la lista de alumnos paginados
    public function index()
    {
        // Obtener los alumnos paginados de 10 en 10
        $estudiantes = Estudiante::paginate(10);

        // Pasar los alumnos a la vista
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Método para mostrar las notas de un alumno
    public function show($id)
    {
        // Obtener el alumno por ID
        $estudiante = Estudiante::findOrFail($id);

        // Obtener las notas del alumno, puedes usar relaciones Eloquent si has definido la relación
        $puntos = Punto::where('estudiante_id', $id)->get();

        // Pasar el alumno y sus notas a la vista
        return view('estudiantes.show', compact('estudiante', 'puntos'));
    }
}
