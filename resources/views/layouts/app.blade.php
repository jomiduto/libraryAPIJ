<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Librería AIPJ')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-white">
    <header class="flex items-center bg-[#F8F8F8] pt-3 pr-5 justify-between border-b-[#ddd]">
        <div class="h-12">
            <img src="#" alt="Logo AIPJ">
        </div>
        <nav>
            <ul class="flex m-0 p-0 list-none gap-4">
                <li class="inline">
                    <a class="text-primary font-bold hover:text-secondary underline" href="#">Inicio</a>
                    <a class="text-primary font-bold hover:text-secondary underline" href="#">Quiénes somos</a>
                    <a class="text-primary font-bold hover:text-secondary underline" href="#">Eventos</a>
                    <a class="text-primary font-bold hover:text-secondary underline" href="#">Asociados</a>
                    <a class="text-primary font-bold hover:text-secondary underline" href="#">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>@yield('footer')</p>
    </footer>
</body>
</html>
