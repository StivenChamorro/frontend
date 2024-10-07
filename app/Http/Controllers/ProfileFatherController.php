<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileFatherController extends Controller
{
    //
    public function index()
    {
        return view('perfil_padre.perfil_padre');
    }

    public function index2()
    {
        return view('vista_jugadores.jugadores');
    }
    public function index3()
    {
        return view('niveles.nivel1');
    }

}
