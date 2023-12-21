<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::All();
        return view('admin.users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.userRol', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);

        // Verifica si el usuario existe
        if ($usuario) {
            // Elimina el usuario
            $usuario->delete();
    
            // Puedes redirigir a una página específica después de eliminar el usuario
            return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente');
        } else {
            // Puedes redirigir a una página de error o mostrar un mensaje de error, según tus necesidades
            return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado');
        }
    }
}
