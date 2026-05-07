@extends('layouts.app')

@section('content')

<h2>Login</h2>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label>Senha</label>
        <input type="password" name="password" required>
    </div>

    @error('email')
        <p class="erro">{{ $message }}</p>
    @enderror

    <button type="submit">Entrar</button>

</form>

@endsection