@extends('layouts.app')

@section('content')
   
    <div class="container_fun">
        <div class="header-actions">
        <h1>Funcionários</h1>

        <a href="{{ route('funcionarios.create') }}">
            <button class="btnCadastrar">+ Cadastrar Funcionário</button>
        </a>
    </div>
      <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Salário</th>
                    <th></th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->name }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>{{ $funcionario->phone }}</td>
                        <td>R$ {{ number_format($funcionario->salary, 2, ',', '.') }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{route ('funcionarios.show', $funcionario->id)}}" class="action">
                                <button class="btnVer">Ver</button>
                            </a>
                                <a class="action" href="{{route('funcionarios.edit', $funcionario->id)}}">
                                <button class="btnEditar">Editar</button>
                            </a>
                            
                            </div>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
        
    </div>
@endsection
