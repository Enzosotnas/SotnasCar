@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Modelos cadastrados</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('modelos.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Novo Modelo</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if($modelos->count())
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th style="width: 120px;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($modelos as $modelo)
                            <tr>
                                <td>{{ $modelo->id }}</td>
                                <td>{{ $modelo->nome }}</td>
                                <td>{{ $modelo->marca->nome }}</td>
                                <td class="text-center"><a href="{{ route('modelos.edit', $modelo) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('modelos.destroy', $modelo) }}" method="POST" class="d-inline" onsubmit="return confirm('Excluir modelo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $modelos->links() }}
                </div>
            @else
                <p>Nenhum modelo cadastrado.</p>
            @endif
        </div>
    </div>
@endsection