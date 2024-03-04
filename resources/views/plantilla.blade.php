<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>@yield ('titulo')</title>
</head>
<body>
    <header>
        <h1>Bienvenido al Registro de Usuario</h1>
    </header>
    <main class="estructura">
        @yield('contenido')
    </main>
    <footer>Todo los derechos reservados</footer>
</body>
</html>