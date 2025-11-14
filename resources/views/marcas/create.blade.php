@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Cadastrar nova marca</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('marcas.store') }}" method="POST" class="user">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da marca</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-save"></i> Salvar</button>
        <a href="{{ route('marcas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
@endsection