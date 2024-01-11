<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Services</title>
    <!-- Adicione aqui seus links para CSS, JavaScript, etc. -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('users.index') }}">Sua Livraria</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Livros</a>
                    
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Pedidos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Autores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Categorias</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Editoras</a>
                </li>
                
                <!-- Adicione outros links do menu conforme necessário -->
            </ul>
        </div>
        
        
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Adicione aqui seus scripts JavaScript, se necessário -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
