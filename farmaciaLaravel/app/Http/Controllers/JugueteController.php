<?php

namespace App\Http\Controllers;
use App\Models\Juguete;
use Illuminate\Http\Request;

class JugueteController extends Controller
{
    public function index()
    {
        $juguetes = Juguete::all();

        return view('juguetes.index', compact('juguetes'));
    }

    public function create()
    {
        return view('juguetes.create');
    }

    public function store(Request $request)
    {
        $juguetito = $request->validate(
            [
            'nombre' => 'required|string',
            'precio' => 'required|integer',
            ],
            [
            'nombre.required' => 'El nombre es obligatorio',
            'precio.required' => 'El precio es obligatorio',
            'precio.integer'  => 'El precio tiene que ser un numero entero',
            ]
        );

        Juguete::create($juguetito);

        return redirect('/juguetes');
    }
}
