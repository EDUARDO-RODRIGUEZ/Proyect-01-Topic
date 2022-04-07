<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function register()
    {
        return view('welcome');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:usuarios',
            'password' => 'required|min:8'
        ]);

        $usuario = new Usuario;
        $usuario->map($request);
        $usuario->setPasswordAttribute($request->password);        
        $usuario->save();
        return redirect()->route('usuario.list');
    }

    public function listar()
    {
        $usuarios = Usuario::all();

        return view('list')
            ->with('usuarios', $usuarios);
    }
}
