<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Services</title>
    <!-- Adicione aqui seus links para CSS, JavaScript, etc. -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('users.index') }}">Indice Usuários</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        </div>           
    </nav>

    <main class="py-4">
        @yield('content')
    </main>


</body>
</html>
