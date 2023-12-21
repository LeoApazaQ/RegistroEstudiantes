<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;

class EstudianteController extends Controller
{

    public function __construct()
    {
        $this->middleware('can: Lista estudiantes')->only('index');
    }

    // Mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', compact('estudiantes'));
    }

    // Mostrar el formulario para crear un nuevo estudiante
    public function create()
    {
        return view('estudiante.form');
    }

    // Almacenar un nuevo estudiante en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required|integer',
            'telefono' => 'required|integer',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'correo' => 'required|email',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiante.index')->with('success', 'Estudiante creado exitosamente');
    }

    // Mostrar un estudiante específico
    public function show(Estudiante $estudiante)
    {
        return view('estudiante.show', compact('estudiante'));
    }

    // Mostrar el formulario para editar un estudiante
    public function edit(Estudiante $estudiante)
    {
        return view('estudiante.edit', compact('estudiante'));
    }

    // Actualizar un estudiante en la base de datos
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'dni' => 'required|integer',
            'telefono' => 'required|integer',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'correo' => 'required|email',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiante.index')->with('success', 'Estudiante actualizado exitosamente');
    }

    // Eliminar un estudiante de la base de datos
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiante.index')->with('success', 'Estudiante eliminado exitosamente');
    }
}
