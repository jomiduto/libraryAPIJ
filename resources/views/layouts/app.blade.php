<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Librería AIPJ')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Sora:wght@100..800&display=swap');
    </style>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col p-0 m-0">
    <header>
        <div class="container flex flex-row mx-auto">
            <div class="flex-1" id="logo">
                <img class="h-20" src="./img/ID-Siglas-Color.jpg" alt="AIPJ Asociacion Iberoamericana de Psicologia Juridica">
            </div>
            <nav class="flex-1">
                <ul class="flex flex-row h-20 items-center justify-end text-lg text-center mr-6 font-bold font-dm-sans">
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/">Inicio</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/quienes-somos">Quiénes somos</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/eventos">Eventos</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/asociados">Asociados</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="w-full bg-[#F5CDCD] py-6">
    {{-- <footer class="w-full absolute bottom-0 bg-[#F5CDCD] py-6"> --}}
        <div class="flex flex-row mx-auto">
            <div class="flex-1" id="logo">
                <img class="h-20" src="./img/Icon-Salmon.jpg" alt="AIPJ Asociacion Iberoamericana de Psicologia Juridica  logo">
            </div>
            <div class="flex-1">
                <ul class="mr-6 h-20">
                    <li class="font-dm-sans text-lg text-secondary"><a href="https://www.aipjinternacional.com/quienes-somos">Quiénes somos</a></li>
                    <li class="font-dm-sans text-lg text-secondary"><a href="https://www.aipjinternacional.com/beneficios">Beneficios</a></li>
                    <li class="font-dm-sans text-lg text-secondary"><a href="https://www.aipjinternacional.com/asociados">Asociados</a></li>
                    <li class="font-dm-sans text-lg text-secondary"><a href="https://www.aipjinternacional.com/contacto">Contacto</a></li>
                    <li class="font-dm-sans text-lg text-secondary"><a href="https://www.aipjinternacional.com/eventos">Eventos</a></li>
                    <li class="font-dm-sans text-lg text-secondary"><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="flex-1">
                <ul class="mr-6 h-20">
                    <li class="font-dm-sans text-lg text-secondary">Sede central, Madrid</li>
                    <li class="font-dm-sans text-lg text-secondary">(+54) 900 900 900</li>
                    <li class="font-dm-sans text-lg text-secondary">info@aipjinternacional</li>
                </ul>
            </div>
        </div>
        <!-- Social Media Icons -->
        <div class="container flex justify-center space-x-6 mt-32">
            <div class="flex justify-center space-x-6">
                <a href="#" class="hover:text-gray-400">LinkedIn</a>
                <a href="#" class="hover:text-gray-400">Instagram</a>
                <a href="#" class="hover:text-gray-400">Facebook</a>
            </div>
            <p class="text-center text-primary font-bold font-dm-sans text-lg">© Todos los derechos reservados</p>
            <p class="mb-2 text-center text-primary font-dm-sans text-lg">Design by <a href="https://www.nowoo.com.co/" target="blank" class="underline">@nöwoo</a></p>
        </div>
    </footer>
</body>
</html>
