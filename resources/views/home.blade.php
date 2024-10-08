@extends('layouts.app')

@section('title', 'Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@section('content')
    <section class="mb-8">
        <h1 class="font-sora text-primary font-bold text-7xl mb-3">Biblioteca virtual</h1>
        <p class="mt-3 font-dm-sans text-secondary text-3xl font-medium tracking-wider">La Dirección Editorial de la AIPJ pone a disposición de sus Asociados Recursos Bibliográficos sobre temáticas variadas, bajo el formato de Trabajos técnico-científicos, direccionados a contribuir:</p>
        <ul class="pt-5 text-2xl text-secondary font-dm-sans font-medium tracking-wider list-disc">
            <li>A un mejor desempeño profesional en el ámbito Jurídico Forense</li>
            <li>A la planificación adecuada de procesos de evaluación/valoración psicológico forense</li>
            <li>A unificar criterios de intervención interdisciplinar éticamente responsables</li>
        </ul>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Sección 1</h3>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Sección 2</h3>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-2">Sección 3</h3>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>
@endsection

@section('footer')
