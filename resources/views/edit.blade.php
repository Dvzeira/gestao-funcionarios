@extends('layouts.app')

@section('content')
   <form class="edit" action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
    @csrf
    @method('put')

    <div>
        <label>Nome</label>
        <input type="text" name="name" value="{{ $funcionario->name }}">
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ $funcionario->email }}">
    </div>

    <div>
        <label>Telefone</label>
        <input type="text" name="phone" value="{{ $funcionario->phone }}">
    </div>

    <div>
        <label>CPF</label>
        <input type="text" name="cpf" value="{{ $funcionario->cpf }}">
    </div>

    <div>
        <label>Cargo</label>
        <input type="text" name="position" value="{{ $funcionario->position }}">
    </div>

    <div>
        <label>Salário</label>
        <input type="number" step="0.01" name="salary" value="{{ $funcionario->salary }}">
    </div>

    <div>
        <label>Data de Nascimento</label>
        <input type="date" name="birth_date" value="{{ $funcionario->birth_date }}">
    </div>

    <div>
        <label>Gênero</label><br>

        <input type="radio" name="gender" value="male"
            {{ $funcionario->gender == 'male' ? 'checked' : '' }}> Masculino

        <input type="radio" name="gender" value="female"
            {{ $funcionario->gender == 'female' ? 'checked' : '' }}> Feminino

        <input type="radio" name="gender" value="other"
            {{ $funcionario->gender == 'other' ? 'checked' : '' }}> Outro
    </div>

    <button type="submit">Atualizar</button>
</form>

@endsection