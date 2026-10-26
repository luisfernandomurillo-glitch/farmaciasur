<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function index(){
        $lotes = Lote::latest()->paginate(10);

        return view('lotes.index', compact('lotes'));
    }

    public function create(){
        return view('lotes.create');
    }

    public function store(Request $request){
        $datos = $request->validate([
            'nombre_producto' => ['required', 'string', 'max:255'],
            'cantidad'        => ['required', 'integer', 'min:1'],
            'precio_unitario' => ['required', 'numeric', 'min:0'],
            'descripcion'     => ['nullable', 'string'],
            'fecha_ingreso'   => ['required', 'date'],
            'fecha_caducidad' => ['required', 'date', 'after:fecha_ingreso'],
            'laboratorio'     => ['required', 'string', 'max:255'],
            'disponible'      => ['required', 'boolean'],
        ]);

        Lote::create($datos);

        return redirect()->route('lotes.index');
    }
}
