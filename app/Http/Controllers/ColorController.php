<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::orderBy('id', 'asc')->paginate(10);

        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        return view('colors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Color::create([
            'nome' => $request->nome,
        ]);

        return redirect()
            ->route('colors.index')
            ->with('success', 'Cor cadastrada com sucesso!');
    }

    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    public function update(Request $request, Color $color)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $color->update([
            'nome' => $request->nome,
        ]);

        return redirect()
            ->route('colors.index')
            ->with('success', 'Cor atualizada com sucesso!');
    }

    public function destroy(Color $color)
    {
        $color->delete();

        return redirect()
            ->route('colors.index')
            ->with('success', 'Cor excluída com sucesso!');
    }
}