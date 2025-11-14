@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Veículos cadastrados</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('carros.create') }}" class="btn btn-primary">+ Novo veículo</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Ano</th>
                <th>KM</th>
                <th>Valor</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
                <tr>
                    <td>{{ $carro->id }}</td>
                    <td>{{ $carro->marca->nome ?? '—' }}</td>
                    <td>{{ $carro->modelo->nome ?? '—' }}</td>
                    <td>{{ $carro->color->nome ?? '—' }}</td>
                    <td>{{ $carro->ano }}</td>
                    <td>{{ number_format($carro->quilometragem, 0, ',', '.') }} km</td>
                    <td>R$ {{ number_format($carro->valor, 2, ',', '.') }}</td>
                    <td>
                        @if($carro->fotoPrincipal)
                            <img src="{{ $carro->fotoPrincipal->url }}" width="90">
                        @endif
                    </td>
                    
                    <td>
                        <a href="{{ route('carros.edit', $carro) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('carros.destroy', $carro) }}" method="POST" class="d-inline" onsubmit="return confirm('Excluir?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $carros->links() }}

@endsection