@extends('template_admin.login')

@section('conteudo')
<form method="POST" action="{{ route('login') }}" class="user">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user" 
            value="{{ old('email') }}" placeholder="Email" required autofocus>
        @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control form-control-user" 
            placeholder="Senha" required>
        @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Lembrar-me</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">
        Entrar
    </button>
    <hr>
</form>

<div class="text-center mt-4 mb-5">
    <a class="small" href="{{ route('register') }}">Criar uma conta!</a>
</div>
@endsection