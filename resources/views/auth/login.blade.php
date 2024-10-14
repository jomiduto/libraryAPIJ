@extends('layouts.app')

@section('title', 'Iniciar Sesión Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@section('content')
    <main class="h-screen w-full">
        <section>
            <div class="flex flex-col items-center justify-center">
                <form class="w-5/12 mt-6 border-solid border-2 border-text rounded p-8 shadow-2xl" method="POST" action="{{ route('login') }}" novalidate autocomplete="off">
                    @csrf
                    <h1 class="font-sora text-primary font-bold text-5xl mb-8 text-center">Iniciar Sesión</h1>

                    <div class="sm:col-span-3 mb-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Correo electrónico</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-input" value="{{ old('email') }}">
                            @error('email')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3 mb-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Contraseña</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" placeholder="Contraseña" class="form-input">
                            @error('password')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sansgit">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-secondary font-dm-sans">Recordarme</label>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900 font-dm-sans">Cancelar</button>
                        <button type="submit" class="font-dm-sans rounded-md bg-primary px-3 py-2 text-sm font-semibold text-[#FFFFFF] shadow-sm hover:bg-[#F5CDCD] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar sesión</button>
                      </div>
                  </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('footer')
