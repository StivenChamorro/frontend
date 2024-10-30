<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
        return view('home');
    }

    function Header(){
        return view('layouts.header1');
    }

    function Footer(){
        return view('layouts.footer');
    }

    public function nivel1()
    {
        return view('layouts.nivel1');
    }
}


