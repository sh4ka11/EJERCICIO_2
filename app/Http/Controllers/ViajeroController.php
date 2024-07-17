<?php

namespace App\Http\Controllers;

use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function index()
    {
        $viajero = Viajero ::orderBy('id', 'desc')->get();
        return view('Viajero.index', compact('viajero'));
    }

    public function create()
    {
        return view('Viajero.create');
    }

    public function store(Request $request)
    {
        $viajero = new Viajero();
        $viajero->dni = $request->dni;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->tfno = $request->tfno;

        $viajero->save();

        // $table->integer('dni');
        // $table->string('nombre');
        // $table->string('direccion');
        // $table->integer('tfno');

        return redirect()->route('Viajero.index');
    }

    public function destroy(Viajero $viajero)
    {
        $viajero->delete();
        return redirect()->route('Viajero.index');
    }

    public function show(Viajero $viajero)
    {
        return view('Viajero.show', compact('viajero'));
    }

    public function edit(Viajero $viajero)
    {
        return view('Viajero.edit', compact('viajero'));
    }

    public function update(Request $request, Viajero $viajero)
    {
        $viajero->dni = $request->dni;
        $viajero->nombre = $request->nombre;
        $viajero->direccion = $request->direccion;
        $viajero->tfno = $request->tfno;

        $viajero->save();

        return redirect()->route('Viajero.index');
    }
}

