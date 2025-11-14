<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::orderBy('id', 'asc')->paginate(10);
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        Marca::create($request->only('nome'));

        return redirect()->route('marcas.index')
            ->with('success', 'Marca cadastrada com sucesso!');
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        $marca->update($request->only('nome'));

        return redirect()->route('marcas.index')
            ->with('success', 'Marca atualizada com sucesso!');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();

        return redirect()->route('marcas.index')
            ->with('success', 'Marca excluída com sucesso!');
    }
}