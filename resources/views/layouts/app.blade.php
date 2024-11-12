<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'foxtechnology')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        {{-- esto es un comentario --}}
        @include('layouts.navbar')
    </header>

    <main>
        @yield('contenico')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
    
</body>
</html>