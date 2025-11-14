@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Editar veículo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('carros.update', $carro) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <div class="col-md-4">
                <label>Marca</label>
                <select name="marca_id" class="form-control" required>
                    @foreach($marcas as $m)
                        <option value="{{ $m->id }}" @if($carro->marca_id == $m->id) selected @endif>
                            {{ $m->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Modelo</label>
                <select name="modelo_id" class="form-control" required>
                    @foreach($modelos as $m)
                        <option value="{{ $m->id }}" @if($carro->modelo_id == $m->id) selected @endif>
                            {{ $m->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label>Cor</label>
                <select name="color_id" class="form-control" required>
                    @foreach($cores as $c)
                        <option value="{{ $c->id }}" @if($carro->color_id == $c->id) selected @endif>
                            {{ $c->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mt-3">
            <div class="col-md-4">
                <label>Ano</label>
                <input type="number" class="form-control" name="ano" value="{{ $carro->ano }}" required>
            </div>
            <div class="col-md-4">
                <label>Quilometragem</label>
                <input type="number" class="form-control" name="quilometragem" value="{{ $carro->quilometragem }}" required>
            </div>
            <div class="col-md-4">
                <label>Valor (R$)</label>
                <input type="number" step="0.01" class="form-control" name="valor" value="{{ $carro->valor }}" required>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>Descrição / Detalhes</label>
            <textarea name="detalhes" rows="4" class="form-control">{{ $carro->detalhes }}</textarea>
        </div>

        <hr>
        <h5>Fotos (mínimo 3 URLs)</h5>

        @foreach($carro->fotos as $foto)
            <input type="url" name="fotos[]" class="form-control mb-2" value="{{ $foto->url }}">
        @endforeach

        @for($i = count($carro->fotos); $i < 3; $i++)
            <input type="url" name="fotos[]" class="form-control mb-2" placeholder="URL da foto {{ $i+1 }}">
        @endfor

        <button type="submit" class="btn btn-primary mt-3">Salvar alterações</button>
    </form>
@endsection