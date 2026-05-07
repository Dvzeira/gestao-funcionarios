
@extends('layouts.app')

@section('content')

    <form action="{{route('funcionarios.store')}}" method="post">
            @csrf()
        <div>
                <label>Nome</label>
                <input type="text" name="name" required>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label>Telefone</label>
                <input type="text" name="phone" required>
            </div>

            <div>
                <label>CPF</label>
                <input type="text" name="cpf" required>
            </div>

            <div>
                <label>Cargo</label>
                <input type="text" name="position" required>
            </div>

            <div>
                <label>Salário</label>
                <input type="number" step="0.01" name="salary" required>
            </div>

            <div>
                <label>Data de Nascimento:</label>
                <input type="date" name="birth_date" required>
            </div>

            <div>
                
                <label>Gênero</label>
                <input type="radio" name="gender" value="male" required> Masculino<br> 
                <input type="radio" name="gender" value="female"> Feminino<br>
                <input type="radio" name="gender" value="other"> Outro
            </div>

            <div>
                <button type="submit">Cadastrar</button>
            </div>

        </form>
        </form>

    @endsection