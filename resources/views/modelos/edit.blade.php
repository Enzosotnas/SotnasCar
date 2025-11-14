@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Editar Modelo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('modelos.update', $modelo) }}" method="POST" class="user">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome do modelo</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $modelo->nome) }}" required>
        </div>
        <div class="form-group mt-3">
            <label>Marca</label>
            <select name="marca_id" class="form-control" required>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}"
                            @if($marca->id == $modelo->marca_id) selected @endif>
                        {{ $marca->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary mt-4"><i class="fas fa-save"></i> Atualizar</button>
        <a href="{{ route('modelos.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </form>
@endsection