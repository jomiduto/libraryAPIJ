@extends('layouts.app')

@section('title', 'Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 items-center">
        <div>
            <h1 class="font-sora text-primary font-bold text-6xl mb-3">Biblioteca virtual</h1>
        </div>
        @guest
            <div class="flex justify-center md:justify-end">
                <a href="{{ route('login') }}" class="bg-primary text-text px-4 py-2 rounded">Iniciar sesión</a>
            </div>
        @endguest
    </section>
    <section class="mb-8">
        <p class="mt-3 font-dm-sans text-secondary text-3xl font-medium tracking-wider">La Dirección Editorial de la AIPJ pone a disposición de sus Asociados Recursos Bibliográficos sobre temáticas variadas, bajo el formato de Trabajos técnico-científicos, direccionados a contribuir:</p>
        <ul class="pt-5 text-2xl text-secondary font-dm-sans font-medium tracking-wider list-disc">
            <li>A un mejor desempeño profesional en el ámbito Jurídico Forense</li>
            <li>A la planificación adecuada de procesos de evaluación/valoración psicológico forense</li>
            <li>A unificar criterios de intervención interdisciplinar éticamente responsables</li>
        </ul>
    </section>
    <div class=" mb-12">
        <h1 class="text-[48px] font-bold text-primary font-sora">Temas de Interés</h1>
        <p class="font-dm-sans text-primary text-lg">2024</p>
    </div>
    {{-- <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="relative p-6 h-[426px] w-[350px] object-cover">
            <h6 class="text-xl font-semibold font-sora mb-2">Civil</h6>
            <img src="./img/categories/Civil.png" alt="Civil" class="rounded-[20px] object-cover">
            <a href="#" class="bg-primary text-text px-4 py-2 rounded">Ver más</a>
        </div>
        <div class="p-6">
            <h6 class="text-xl font-semibold font-sora mb-2">Niñez y Adolenscensia</h6>
            <img src="./img/categories/Niñez-Adolecencia.png" alt="Civil" class="rounded-2xl object-cover">
            <a href="#" class="bg-primary text-text px-4 py-2 rounded">Ver más</a>
        </div>
        <div class="p-6">
            <h6 class="text-xl font-semibold font-sora mb-2">Familias</h6>
            <img src="./img/categories/Familias.png" alt="Civil" class="rounded-2xl object-cover">
            <a href="#" class="bg-primary text-text px-4 py-2 rounded">Ver más</a>
        </div>
        <div class="p-6">
            <h6 class="text-xl font-semibold font-sora mb-2">Violencia Familiar y de Género</h6>
            <img src="./img/categories/Violencia-familiar-genero.png" alt="Civil" class="rounded-2xl object-cover">
            <a href="#" class="bg-primary text-text px-4 py-2 rounded">Ver más</a>
        </div>
    </section> --}}
    <!-- Grid de tarjetas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Tarjeta 1 -->
        <div class="relative grid grid-rows-[auto_1fr_auto] rounded-lg overflow-hidden w-[350px] h-5/6">
            <!-- Imagen de fondo -->
            <img src="./img/categories/civil.png" alt="Civil" class="max-w-full object-cover w-full h-full row-span-full col-span-full">

            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col justify-between p-4">
                <!-- Título -->
                <h2 class="text-text font-bold text-xl font-sora row-start-1">Civil</h2>
                <!-- Botón -->
                <a href="#" class="bg-primary text-lg text-text font-bold tracking-wider font-dm-sans py-2 px-4 text-center rounded-lg hover:bg-[#F5CDCD] row-start-3 place-self-start">
                    Ver más
                </a>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="relative grid grid-rows-[auto_1fr_auto] rounded-lg overflow-hidden w-[350px] h-5/6">
            <!-- Imagen de fondo -->
            <img src="./img/categories/familias.png" alt="Familias" class="max-w-full object-cover w-full h-full row-span-full col-span-full">

            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col justify-between p-4">
                <!-- Título -->
                <h2 class="text-text font-bold text-xl font-sora row-start-1">Familias</h2>
                <!-- Botón -->
                <a href="#" class="bg-primary text-lg text-text font-bold tracking-wider font-dm-sans py-2 px-4 text-center rounded-lg hover:bg-[#F5CDCD] row-start-3 place-self-start">
                    Ver más
                </a>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="relative grid grid-rows-[auto_1fr_auto] rounded-lg overflow-hidden w-[350px] h-5/6">
            <!-- Imagen de fondo -->
            <img src="./img/categories/niñez-adolecencia.png" alt="Niñez y Adolescencia" class="max-w-full object-cover w-full h-full row-span-full col-span-full">

            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col justify-between p-4">
                <!-- Título -->
                <h2 class="text-text font-bold text-xl font-sora row-start-1">Niñez y Adolescencia</h2>
                <!-- Botón -->
                <a href="#" class="bg-primary text-lg text-text font-bold tracking-wider font-dm-sans py-2 px-4 text-center rounded-lg hover:bg-[#F5CDCD] row-start-3 place-self-start">
                    Ver más
                </a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
