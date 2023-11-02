<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="shadow-md flex items-center justify-between p-2">
        <div>
            <h1 class="font-extrabold text-2xl">Ecommerce</h1>
        </div>
        <nav class="flex gap-5 text-sm text-gray-700 font-semibold">
            <a href="/">Inicio</a>
            <a href="">Productos</a>
            <a href="">Recomendado</a>
            <a href="{{ route('Login') }}">Login</a>
            <a href="{{ route('Registro') }}">Crear Cuenta</a>
        </nav>
    </header>
    <main class="w-full h-screen flex justify-center items-center flex-col">
        @yield('contenido')
    </main>
</body>
</html>
