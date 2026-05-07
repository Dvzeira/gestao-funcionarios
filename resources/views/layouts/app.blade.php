<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Funcionários App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="logo">🌎 FuncionáriosApp</div>

        <div class="menu">

    <a href="{{ route('funcionarios.index') }}">Início</a>
     @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Cadastrar</a>
    @endguest

    @auth
    
        <span class="user">👤 {{ auth()->user()->name }}</span>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btnLogout">Sair</button>
        </form>
    @endauth

</div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>Feito por Davi Andrade da Silva</p>
    </footer>

</body>
</html>