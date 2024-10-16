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
    @stack('styles')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="leading-normal tracking-normal">
    <header class="p-4 md:p-6 w-full sticky top-0 z-50 shadow-lg bg-text">
        <div class="container mx-auto flex justify-between items-center">
            <img class="h-10 md:h-16" src="./img/ID-Siglas-Color.jpg" alt="AIPJ Asociacion Iberoamericana de Psicologia Jurídica">
            <nav class="space-x-4">
                <ul class="flex flex-row h-20 items-center justify-end text-lg text-center mr-6 font-bold font-dm-sans">
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/">Inicio</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/quienes-somos">Quiénes somos</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/eventos">Eventos</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/asociados">Asociados</a></li>
                    <li class="menu-item"><a href="https://www.aipjinternacional.com/contacto">Contacto</a></li>
                    @auth
                        <div class="grid w-full place-items-center overflow-hidden rounded-lg p-6">
                            <img id="dropdownButton" class="relative inline-block h-10 w-10 cursor-pointer rounde-full object-cover object-center" src="./img/user.png" alt="icon-user-login">
                            <!-- Dropdown menu -->
                            <div id="dropdownMenu" class="z-10 hidden bg-text divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-text dark:divide-gray-600">
                                <ul class="absolute z-10 min-w-[180px] overflow-auto rounded-lg bg-text p-1.5 shadow-lg focus:outline-none" aria-labelledby="dropdownDividerButton">
                                    <li class="flex">
                                        <a href="#" class="block cursor-pointer text-secondary font-dm-sans w-full text-sm rounded-md p-3 transition-all hover:bg-primary hover:text-text focus:bg-primary active:bg-primary">¡Hola, {{ auth()->user()->name }}!</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="block cursor-pointer text-secondary font-dm-sans w-full text-sm rounded-md p-3 transition-all hover:bg-primary hover:text-text focus:bg-primary active:bg-primary">Mi Perfil</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="block cursor-pointer text-secondary font-dm-sans w-full text-sm rounded-md p-3 transition-all hover:bg-primary hover:text-text focus:bg-primary active:bg-primary">Usuarios</a>
                                    </li>
                                    <li class="flex">
                                        <a href="#" class="block cursor-pointer text-secondary font-dm-sans w-full text-sm rounded-md p-3 transition-all hover:bg-primary hover:text-text focus:bg-primary active:bg-primary">Contenidos</a>
                                    </li>
                                    <hr class="text-[#E5E7EB]">
                                    <form method="POST" action="{{ route('logout') }}">
                                        <li class="flex">
                                            @csrf
                                            <a class="block cursor-pointer text-secondary font-dm-sans w-full text-sm rounded-md p-3 transition-all hover:bg-primary hover:text-text focus:bg-primary active:bg-primary">
                                                Cerrar sesión
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-4 md:p-6 my-8">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="bg-[#F5CDCD] p-6 text-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mb-6">
            <!-- Primera columna -->
            <div class="w-[40%]">
                <img src="./img/ID-Vertical-Salmon.png" alt="AIPJ Asociacion Iberoamericana de Psicologia Juridica" class="object-cover w-full h-full row-span-full col-span-full">
            </div>
            <!-- Segunda columna -->
            <div>
                <ul class="space-y-4">
                    <li><a href="https://www.aipjinternacional.com/quienes-somos" class="text-secondary font-dm-sans text-lg">Quiénes somos</a></li>
                    <li><a href="https://www.aipjinternacional.com/beneficios" class="text-secondary font-dm-sans text-lg">Beneficios</a></li>
                    <li><a href="https://www.aipjinternacional.com/asociados" class="text-secondary font-dm-sans text-lg">Asociados</a></li>
                    <li><a href="https://www.aipjinternacional.com/contacto" class="text-secondary font-dm-sans text-lg">Contacto</a></li>
                    <li><a href="https://www.aipjinternacional.com/eventos" class="text-secondary font-dm-sans text-lg">Eventos</a></li>
                    <li><a href="#" class="text-secondary font-dm-sans text-lg">Blog</a></li>
                </ul>
            </div>
            <!-- Tercera columna -->
            <div>
                <ul class="space-y-4">
                    <li><a href="#" class="text-secondary font-dm-sans text-lg">Sede central, Madrid</a></li>
                    <li><a href="#" class="text-secondary font-dm-sans text-lg">(+54) 900 900 900</a></li>
                    <li><a href="#" class="text-secondary font-dm-sans text-lg">info@aipjinternacional</a></li>
                </ul>
            </div>
        </div>

        <!-- Parte inferior del footer -->
        <div class="container mx-auto text-center pt-4">
            <p class="text-primary text-lg font-bold leading-relaxed">&copy; Todos los derechos reservados</p>
            <p class="text-primary text-lg font-medium">Design by <a href="https://www.nowoo.com.co/" target="_blank" class="underline">@nöwoo</a></p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/d446d71118.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>

        // Toggle dropdown visibility
        document.getElementById('dropdownButton').addEventListener('click', function() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
        });

        // Close the dropdown when clicking outside
        window.addEventListener('click', function(e) {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');
            if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
