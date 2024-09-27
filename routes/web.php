<?php

use App\Http\Controllers\AddChildController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('iniciar_sesion',[LoginController::class,'store'])->name('iniciarsesion');
Route::get('register',[RegisterController::class,'store'])->name('registro');
Route::get('add_child',[AddChildController::class,'store']);
Route::get('terms',[TermsController::class,'store'])->name('terminos');
Route::get('profile',[ProfileController::class,'store'])->name('profile');