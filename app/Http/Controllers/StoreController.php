<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store_view_1 (){
        return view('views_store-haiver_velasco.view_1_store-haiver_velasco');
    }

    public function store_view_2 (){
        return view('views_store-haiver_velasco.view_2_store-haiver_velasco');
    }

    public function store_view_3 (){
        return view('views_store-haiver_velasco.view_3_store-haiver_velasco');
    }
}
