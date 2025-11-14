@extends('template_admin.register')

@section('conteudo')
<form method="POST" action="{{ route('register') }}" class="user">
    @csrf
    <div class="form-group">
        <input type="text" name="name" value="{{ old('name') }}"
            class="form-control form-control-user" placeholder="Nome" required autofocus>
        @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}"
            class="form-control form-control-user" placeholder="E-mail" required>
        @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" name="password"
                class="form-control form-control-user" placeholder="Senha" required>
            @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>
        <div class="col-sm-6">
            <input type="password" name="password_confirmation"
                class="form-control form-control-user" placeholder="Confirmar Senha" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">
        Criar Conta
    </button>

    <hr>
    <div class="text-center mt-4 mb-5">
        <a class="small" href="{{ route('login') }}">Já tem uma conta? Entrar</a>
    </div>
</form>
@endsection