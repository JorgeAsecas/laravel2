<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {

        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));


    }
    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => ['required','string','max:255'],
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')->with('status','Alumno creado exitosamente');
    }
    public function show($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.show', compact('alumno'));

    }
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.edit', compact('alumno'));
    }
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $request->validate([
            'nombre' => ['required','string','max:255'],
        ]);


        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('status','Alumno actualizado exitosamente');
    }
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('status','Alumno eliminado exitosamente');
    }
}
