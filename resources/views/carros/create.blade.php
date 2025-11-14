@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Cadastrar veículo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('carros.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-md-4">
                <label>Marca</label>
                <select name="marca_id" class="form-control" required>
                    <option value="">Selecione</option>
                    @foreach($marcas as $m)
                        <option value="{{ $m->id }}">{{ $m->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Modelo</label>
                <select name="modelo_id" class="form-control" required>
                    <option value="">Selecione</option>
                    @foreach($modelos as $m)
                        <option value="{{ $m->id }}">{{ $m->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Cor</label>
                <select name="color_id" class="form-control" required>
                    <option value="">Selecione</option>
                    @foreach($cores as $c)
                        <option value="{{ $c->id }}">{{ $c->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mt-3">
            <div class="col-md-4">
                <label>Ano</label>
                <input type="number" class="form-control" name="ano" required>
            </div>
            <div class="col-md-4">
                <label>Quilometragem</label>
                <input type="number" class="form-control" name="quilometragem" required>
            </div>
            <div class="col-md-4">
                <label>Valor (R$)</label>
                <input type="number" step="0.01" class="form-control" name="valor" required>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>Descrição / Detalhes</label>
            <textarea name="detalhes" rows="4" class="form-control" placeholder="Informações adicionais sobre o veículo (opcional)">{{ old('detalhes') }}</textarea>
        </div>

        <hr>
        <h5>Fotos (mínimo 3 URLs)</h5>
        <div id="fotoInputs">
            <input type="url" name="fotos[]" class="form-control mb-2" placeholder="URL da foto 1 (principal)" required>
            <input type="url" name="fotos[]" class="form-control mb-2" placeholder="URL da foto 2" required>
            <input type="url" name="fotos[]" class="form-control mb-2" placeholder="URL da foto 3" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
@endsection