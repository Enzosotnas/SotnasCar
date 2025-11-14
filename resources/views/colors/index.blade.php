@extends('template_admin.index')

@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800">Cores</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('colors.create') }}" class="btn btn-primary">+ Nova cor</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width: 80px">ID</th>
            <th>Nome</th>
            <th style="width: 150px">Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($colors as $color)
            <tr>
                <td>{{ $color->id }}</td>
                <td>{{ $color->nome }}</td>
                <td>
                    <a href="{{ route('colors.edit', $color) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('colors.destroy', $color) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja realmente excluir esta cor?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">Nenhuma cor cadastrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $colors->links() }}
@endsection