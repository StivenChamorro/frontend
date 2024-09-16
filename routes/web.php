<?php

use App\Http\Controllers\AddChildController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileFatherController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('iniciar_sesion',[LoginController::class,'store']);
Route::get('Register',[RegisterController::class,'store']);
Route::get('Add_Child',[AddChildController::class,'store']);
Route::get('Profile_Father',[ProfileFatherController::class,'store']);