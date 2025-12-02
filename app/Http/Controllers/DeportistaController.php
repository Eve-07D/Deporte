<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeportistaController extends Controller
{
    public function index()
    {
        $deportistas = Deportista::with(['pais','disciplina'])->get();
        return view('deportistas.index', compact('deportistas'));
    }

    public function create()
    {
        $paises = Pais::all();
        $disciplinas = Disciplina::all();
        return view('deportistas.create', compact('paises','disciplinas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'pais_id' => 'required|exists:paises,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'fecha_nacimiento' => 'required|date',
            'estatura' => 'required|integer|min:1',
            'peso' => 'required|integer|min:1',
        ]);

        Deportista::create($request->all());

        return redirect()->route('deportistas.index')
            ->with('success', 'Deportista registrado');
    }

    public function edit(Deportista $deportista)
    {
        $paises = Pais::all();
        $disciplinas = Disciplina::all();
        return view('deportistas.edit', compact('deportista','paises','disciplinas'));
    }

    public function update(Request $request, Deportista $deportista)
    {
        $request->validate([
            'nombre' => 'required',
            'pais_id' => 'required|exists:paises,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'fecha_nacimiento' => 'required|date',
            'estatura' => 'required|integer|min:1',
            'peso' => 'required|integer|min:1',
        ]);

        $deportista->update($request->all());

        return redirect()->route('deportistas.index')
            ->with('success','Actualizado correctamente');
    }

    public function destroy(Deportista $deportista)
    {
        $deportista->delete();
        return redirect()->route('deportistas.index')
            ->with('success','Eliminado correctamente');
    }
}
