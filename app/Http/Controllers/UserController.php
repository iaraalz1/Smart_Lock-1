<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener los datos de los usuarios desde tu base de datos
        $users = \App\Models\User::all();

        // Puedes pasar los datos a la vista y mostrarlos en una tabla, por ejemplo
        return view('users.index', compact('users'));
    }
    public function create()
    {
        // Aquí puedes agregar la lógica necesaria antes de mostrar el formulario
        return view('users.create'); // Asegúrate de tener una vista "users.create"
    }
}
