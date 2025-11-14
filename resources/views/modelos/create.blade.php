@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Cadastrar Modelo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('modelos.store') }}" method="POST" class="user">
        @csrf
        <div class="form-group">
            <label>Nome do modelo</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>
        <div class="form-group mt-3">
            <label>Marca</label>
            <select name="marca_id" class="form-control" required><option value="">Selecione</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary mt-4"><i class="fas fa-save"></i> Salvar</button>
        <a href="{{ route('modelos.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </form>
@endsection