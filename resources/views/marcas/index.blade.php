@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Marcas cadastradas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('marcas.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Nova marca</a>
    </div>

    @if($marcas->count())
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Nome</th>
                                <th style="width: 120px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marcas as $marca)
                                <tr>
                                    <td>{{ $marca->id }}</td>
                                    <td>{{ $marca->nome }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('marcas.edit', $marca) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('marcas.destroy', $marca) }}" method="POST" class="d-inline" 
                                        onsubmit="return confirm('Tem certeza que deseja excluir esta marca?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $marcas->links() }}
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Nenhuma marca cadastrada ainda.</p>
    @endif
@endsection