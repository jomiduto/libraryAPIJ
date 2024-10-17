@extends('layouts.app')

@section('title', 'Registro Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@push('styles')
<style>
    .eye-icon {
        width: 20px;
        height: 20px;
    }
</style>
@endpush

@section('content')
    <main class="w-full">
        <section>
            <div class="flex flex-col items-center justify-center">
                <form class="w-6/12 mt-6 border-solid border-2 border-text rounded p-8 shadow-2xl" method="POST" action="{{ route('register') }}" novalidate autocomplete="off">
                    @csrf
                    <h1 class="font-sora text-primary font-bold text-5xl mb-5 text-center">Regístrate</h1>
                    <p class=" font-dm-sans mt-1 text-sm leading-6 text-gray-600 text-center">Completa los siguientes datos y accede a nuestros beneficios.</p>

                    <div class="mt-10 mb-12 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Nombres</label>
                            <div class="mt-2">
                                <input type="text" name="nombre" id="nombre" placeholder="Nombres" class="form-input" value="{{ old('nombre') }}">
                                @error('nombre')
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
                            {{-- <span class="toggle-button inline-flex absolute top-1/2 right-[12px] translate-y-[-50%] text-xl text-secondary cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                 </svg>
                            </span> --}}
                            @error('password')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Repetir contraseña</label>
                        <div class="mt-2">
                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite la contraseña" class="form-input" value="{{ old('password_confirmation') }}">
                            {{-- <span class="toggle-button inline-flex absolute top-1/2 right-[12px] translate-y-[-50%] text-xl text-secondary cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                 </svg>
                            </span> --}}
                            @error('password_confirmation')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="pais" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">País de nacimiento</label>
                        <div class="mt-2">
                          <select id="pais" name="pais" class="form-input" value="{{ old('pais') }}">
                            <option value="0">Seleccione</option>
                            @foreach ( $countries as $country )
                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                          </select>
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
                          <select id="especializacion" name="especializacion" class="form-input" value="{{ old('especializacion') }}">
                            <option value="0">Seleccione</option>
                            @foreach ($specializations as $specialization)
                                <option value="{{ $specialization->id }}">{{ $specialization->specializations }}</option>
                            @endforeach
                          </select>
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
<script>

</script>
@push('script-toogle')

<script>
    const eyeIcons = {
        open: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>',
        closed: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" /><path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" /><path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" /></svg>'
    };

    function addListeners() {
        const toggleButton = document.querySelector(".toggle-button");

        if (!toggleButton) {
            return;
        }

        toggleButton.addEventListener("click", togglePassword);
    }

    function togglePassword() {
        const passwordField = document.querySelector("#password");
        const toggleButton = document.querySelector(".toggle-button");

        if (!passwordField || !toggleButton) {
            return;
        }

        toggleButton.classList.toggle("open");

        const isEyeOpen = toggleButton.classList.contains("open");

        toggleButton.innerHTML = isEyeOpen ? eyeIcons.closed : eyeIcons.open;
        passwordField.type = isEyeOpen ? "text" : "password";
    }

    document.addEventListener("DOMContentLoaded", addListeners);
</script>
@endpush

@section('footer')
