
@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Detalhes do Funcionário</h2>

        <div class="card">

            <p><strong>Nome:</strong> {{ $funcionario->name }}</p>

            <p><strong>Email:</strong> {{ $funcionario->email }}</p>

            <p><strong>Telefone:</strong> {{ $funcionario->phone }}</p>

            <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>

            <p><strong>Cargo:</strong> {{ $funcionario->position }}</p>

            <p><strong>Salário:</strong> 
                R$ {{ number_format($funcionario->salary, 2, ',', '.') }}
            </p>

            <p><strong>Data de Nascimento:</strong> 
                {{ \Carbon\Carbon::parse($funcionario->birth_date)->format('d/m/Y') }}
            </p>

            <p><strong>Gênero:</strong> 
                @if($funcionario->gender == 'male')
                    Masculino
                @elseif($funcionario->gender == 'female')
                    Feminino
                @else
                    Outro
                @endif
            </p>

        </div>

       <div class="actions">
            <a href="{{ route('funcionarios.edit', $funcionario->id) }}">
                <button class="btnEditar">Editar</button>
            </a>

            <form class="destroy" 
                action="{{ route('funcionarios.destroy', $funcionario->id) }}" 
                method="POST"
                onsubmit="return confirm('Você quer excluir o funcionário {{ $funcionario->name }} mesmo?')">
                @csrf
                @method('DELETE')

                <button class="btnExcluir" type="submit">
                    Excluir
                </button>
            </form>
        </div>

    </div>

@endsection
