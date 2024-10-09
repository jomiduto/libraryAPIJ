<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validación de campos
        $validated = $request->validate([
            'name' => 'required|min:4|max:100',
            'lastname' => 'required|min:4|max:100',
            'email' => 'required|unique:users|email|max:60',
            'birthdate' => 'required|date',
            'password' => 'required|confirmed|min:8',
            'country' => 'required',
            'phone' =>  'required',
            'specialization' => 'required'
        ]);

        // Creación del usuario

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'password' => $request->password,
            'country' => $request->country,
            'phone' => $request->phone,
            'specialization' => $request->specialization
        ]);


    }
}
