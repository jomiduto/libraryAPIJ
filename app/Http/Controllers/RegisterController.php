<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialization;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::orderBy('country', 'ASC')->get();
        $specializations = Specialization::orderBy('specializations', 'ASC')->get();

        return view('auth.register', compact('countries', 'specializations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validación de campos
        $validated = $request->validate([
            'nombre' => 'required|min:4|max:100|',
            'apellido' => 'required|min:4|max:100',
            'email' => 'required|unique:users|email|max:60',
            'fecha_nacimiento' => 'required|date|before:18 years ago',
            'password' => 'required|confirmed|min:8',
            'pais' => 'required|exists:countries,id',
            'telefono' =>  'required|',
            'especializacion' => 'required|exists:specializations,id'
        ], [
            'fecha_nacimiento.before' => 'Debes ser mayor de edad',
            //'country.exists' => 'Debes seleccionar una opción',
        ]);

        // Creación del usuario

        User::create([
            'name' => $request->nombre,
            'lastname' => $request->apellido,
            'email' => $request->email,
            'birthdate' => $request->fecha_nacimiento,
            'password' => $request->password,
            'country_id' => $request->pais,
            'phone' => $request->telefono,
            'specialization_id' => $request->especializacion
        ]);

        session()->flash('success', 'Te has registrado correctamente');

        // Redireccionar
        return redirect('login');
    }
}
