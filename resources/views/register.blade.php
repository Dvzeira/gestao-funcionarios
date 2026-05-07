@extends('layouts.app')

@section('content')

<h2>Cadastrar</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label>Nome</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name') <p class="erro">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <p class="erro">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Senha</label>
        <input type="password" name="password" required>
    </div>

    <div>
        <label>Confirmar Senha</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit">Cadastrar</button>

</form>

@endsection