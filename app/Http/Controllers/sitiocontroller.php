<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inicio;

class sitiocontroller extends Controller
{
    public function index()
    {
        return view('inicio');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        inicio::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'mensaje' => $data['mensaje'],
        ]);

        return redirect()->route('inicio')->with('status', 'Mensaje enviado correctamente');

    }
}

