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
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        Usuario::create([
            'name' => $name,
            'email' => $email,
            'password' =>  Hash::make($password)
        ]);

        return redirect()->route('usuario.list');
    }

    public function listar()
    {
        $usuarios = Usuario::all();

        return view('list')
            ->with('usuarios', $usuarios);
    }
}
