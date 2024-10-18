@extends('layouts.app')

@section('title', 'Crear Contenido Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@section('content')
<main class="w-full">
    {{-- <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 items-center">
        <div>
            <h1 class="font-sora text-primary font-bold text-6xl mb-3">Cargar contenido</h1>
        </div>
        <div class="flex justify-center md:justify-center">
            <a href="{{ route('contents.index') }}" class="bg-primary text-text font-dm-sans text-lg px-4 py-2 rounded">Ver contenidos</a>
        </div>
    </section> --}}

    <section>
        <div class="flex flex-col items-center justify-center">
            <form class="w-6/12 mt-6 border-solid border-2 border-text rounded p-8 shadow-2xl" method="POST" action="{{ route('register') }}" novalidate autocomplete="off">
                @csrf
                <h1 class="font-sora text-primary font-bold text-5xl mb-5 text-center">Cargar contenido</h1>
                <a href="{{ route("contents.index") }}" class="font-dm-sans mt-1 text-sm leading-6 text-gray-600 text-center">Ver contenidos</a>

                <div class="mt-10 mb-12 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Título</label>
                        <div class="mt-2">
                            <input type="text" name="titulo" id="titulo" placeholder="Título" class="form-input" value="{{ old('titulo') }}">
                            @error('titulo')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Apellidos</label>
                        <div class="mt-2">
                            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="form-input" value="{{ old('apellido') }}">
                            @error('apellido')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                  <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Correo electrónico</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-input" value="{{ old('email') }}">
                        @error('email')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="fecha_nacimiento" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Fecha de nacimiento</label>
                    <div class="mt-2">
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" placeholder="Fecha de nacimiento" class="form-input" value="{{ old('fecha_nacimiento') }}">
                        @error('fecha_nacimiento')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Contraseña</label>
                    <div class="mt-2 relative">
                        <input id="password" name="password" type="password" placeholder="Contraseña" class="form-input" value="{{ old('password') }}">
                        </span>
                        @error('password')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Repetir contraseña</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite la contraseña" class="form-input" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="pais" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">País de nacimiento</label>
                    <div class="mt-2">
                      {{-- <select id="pais" name="pais" class="form-input" value="{{ old('pais') }}">
                        <option value="0">Seleccione</option>
                        @foreach ( $countries as $country )
                            <option value="{{ $country->id }}">{{ $country->country }}</option>
                        @endforeach
                      </select> --}}
                        @error('pais')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Teléfono</label>
                    <div class="mt-2">
                        <input type="number" name="telefono" id="telefono" placeholder="Teléfono" class="form-input" value="{{ old('telefono') }}">
                        @error('telefono')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>

                  <div class="col-span-full">
                    <label for="especializacion" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Área de Especialización</label>
                    <div class="mt-2">
                      {{-- <select id="especializacion" name="especializacion" class="form-input" value="{{ old('especializacion') }}">
                        <option value="0">Seleccione</option>
                        @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->specializations }}</option>
                        @endforeach
                      </select> --}}
                        @error('especializacion')
                            <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class=" flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                    <button type="submit" class="rounded-md bg-primary px-3 py-2 text-sm font-semibold text-[#FFFFFF] shadow-sm hover:bg-[#F5CDCD] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrarme</button>
                  </div>
              </div>
            </form>
        </div>
    </section>
</main>
@endsection

@section('footer')
