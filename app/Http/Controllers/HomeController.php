<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
        return view('home');
    }

    function Header(){
        return view('layouts.header');
    }
}


