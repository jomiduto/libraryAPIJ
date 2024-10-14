@extends('layouts.app')

@section('title', 'Registro Biblioteca AIPJ | Asociación Iberoamericana de Psicología Jurídica')

@section('content')
    <main class="h-screen w-full">
        <section>
            <div class="flex flex-col items-center justify-center">
                <form class="w-6/12 mt-6 border-solid border-2 border-text rounded p-8 shadow-2xl" method="POST" action="{{ route('register') }}" novalidate autocomplete="off">
                    @csrf
                    <h1 class="font-sora text-primary font-bold text-5xl mb-5 text-center">Regístrate</h1>
                    <p class=" font-dm-sans mt-1 text-sm leading-6 text-gray-600 text-center">Completa los siguientes datos y accede a nuestros beneficios.</p>

                    

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Nombres</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" placeholder="Nombres" class="form-input" value="{{ old('name') }}">
                                @error('name')
                                    <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Apellidos</label>
                            <div class="mt-2">
                                <input type="text" name="lastname" id="lastname" placeholder="Apellidos" class="form-input" value="{{ old('lastname') }}">
                                @error('lastname')
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
                        <label for="birthdate" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Fecha de nacimiento</label>
                        <div class="mt-2">
                            <input id="birthdate" name="birthdate" type="text" placeholder="Fecha de nacimiento" class="form-input" value="{{ old('birthdate') }}">
                            @error('birthdate')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Contraseña</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" placeholder="Contraseña" class="form-input" value="{{ old('password') }}">
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
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">País de nacimiento</label>
                        <div class="mt-2">
                          <select id="country" name="country" class="form-input" value="{{ old('country') }}">
                            <option value="0">Seleccione</option>
                            @foreach ( $countries as $country )
                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                          </select>
                            @error('country')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Teléfono</label>
                        <div class="mt-2">
                            <input type="number" name="phone" id="phone" placeholder="Teléfono" class="form-input" value="{{ old('phone') }}">
                            @error('phone')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="col-span-full">
                        <label for="specialization_id" class="block text-sm font-medium leading-6 text-gray-900 font-dm-sans">Área de Especialización</label>
                        <div class="mt-2">
                          <select id="specialization_id" name="specialization_id" class="form-input" value="{{ old('specialization_id') }}">
                            <option value="0">Seleccione</option>
                            @foreach ($specializations as $specialization)
                                <option value="{{ $specialization->id }}">{{ $specialization->specializations }}</option>
                            @endforeach
                          </select>
                            @error('specialization')
                                <p class="bg-primary text-text my-2 rounded-lg text-sm p-1 text-center font-dm-sans">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
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
