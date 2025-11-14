<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Color;
use App\Models\FotoCarro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::with(['marca', 'modelo', 'color', 'fotoPrincipal'])
                       ->orderBy('id', 'asc')
                       ->paginate(10);

        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create', [
            'marcas'  => Marca::orderBy('nome')->get(),
            'modelos' => Modelo::orderBy('nome')->get(),
            'cores'   => Color::orderBy('nome')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca_id'       => 'required|exists:marcas,id',
            'modelo_id'      => 'required|exists:modelos,id',
            'color_id'       => 'required|exists:colors,id',
            'ano'            => 'required|integer',
            'quilometragem'  => 'required|integer',
            'valor'          => 'required|numeric',
            'detalhes'       => 'nullable|string',

            'fotos'          => 'required|array|min:3',
            'fotos.*'        => 'url|required',
        ]);

        $carro = Carro::create($request->only([
            'marca_id',
            'modelo_id',
            'color_id',
            'ano',
            'quilometragem',
            'valor',
            'detalhes'
        ]));

        foreach ($request->fotos as $i => $foto) {
            FotoCarro::create([
                'carro_id'  => $carro->id,
                'url'       => $foto,
                'principal' => $i == 0,
                'ordem'     => $i + 1,
            ]);
        }

        return redirect()->route('carros.index')
                         ->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function edit(Carro $carro)
    {
        $carro->load('fotos');

        return view('carros.edit', [
            'carro'   => $carro,
            'marcas'  => Marca::orderBy('nome')->get(),
            'modelos' => Modelo::orderBy('nome')->get(),
            'cores'   => Color::orderBy('nome')->get(),
        ]);
    }

    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'marca_id'       => 'required|exists:marcas,id',
            'modelo_id'      => 'required|exists:modelos,id',
            'color_id'       => 'required|exists:colors,id',
            'ano'            => 'required|integer',
            'quilometragem'  => 'required|integer',
            'valor'          => 'required|numeric',
            'detalhes'       => 'nullable|string',

            'fotos'          => 'required|array|min:3',
            'fotos.*'        => 'url|required',
        ]);

        $carro->update($request->only([
            'marca_id',
            'modelo_id',
            'color_id',
            'ano',
            'quilometragem',
            'valor',
            'detalhes'
        ]));

        // limpa fotos antigas
        $carro->fotos()->delete();

        foreach ($request->fotos as $i => $foto) {
            FotoCarro::create([
                'carro_id'  => $carro->id,
                'url'       => $foto,
                'principal' => $i == 0,
                'ordem'     => $i + 1,
            ]);
        }

        return redirect()->route('carros.index')
                         ->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index')
                         ->with('success', 'Veículo excluído com sucesso!');
    }

    public function estoque()
    {
        $carros = Carro::with(['marca', 'modelo', 'color', 'fotoPrincipal'])
            ->orderBy('id', 'asc')
            ->paginate(9);

        return view('template_site.estoque', compact('carros'));
    }

    public function infos(Carro $carro)
    {
        $carro->load(['marca', 'modelo', 'color', 'fotos', 'fotoPrincipal']);

        return view('template_site.carro', compact('carro'));
    }

}