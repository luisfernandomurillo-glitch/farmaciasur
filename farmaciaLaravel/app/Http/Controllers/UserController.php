<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }

     public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $datos = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        User::create($datos);

        return redirect()->route('usuarios.index');
    }
}
