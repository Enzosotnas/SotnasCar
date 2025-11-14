@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Editar marca</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('marcas.update', $marca) }}" method="POST" class="user">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome da marca</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $marca->nome) }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-save"></i> Atualizar</button>
        <a href="{{ route('marcas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
@endsection