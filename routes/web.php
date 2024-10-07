<?php

use App\Http\Controllers\HomeController;


use App\Http\Controllers\AddChildController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsController;

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\StoreController;

use App\Http\Controllers\ProfileFatherController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
 //Dev_Yesith


Route::get('home',[HomeController::class,'Home'])->name('home');
Route::get('header',[HomeController::class,'Header']);


Route::get('iniciar_sesion',[LoginController::class,'store'])->name('iniciarsesion');
Route::get('register',[RegisterController::class,'store'])->name('registro');
Route::get('add_child',[AddChildController::class,'store']);
Route::get('terms',[TermsController::class,'store'])->name('terminos');
Route::get('profile',[ProfileController::class,'store'])->name('profile');

//Rutas Tienda (HAIVE VELASCO)
Route::get('vista_1_store',[StoreController::class,'store_view_1'])->name('view_1_store');
Route::get('vista_2_store',[StoreController::class,'store_view_2'])->name('vista_2_store');
Route::get('vista_3_store',[StoreController::class,'store_view_3'])->name('vista_3_store');

//Ruta Logros (HAIVE VELASCO)
Route::get('vista_1_achievement',[AchievementController::class,'achievement_view_1'])->name('vista_1_achievement');

//main
//Ruta perfil padre(BRAYAN SOLARTE)
Route::get('perfil_padre',[ProfileFatherController::class,'index'])->name('perfil_padre');
//Ruta usuarios registrados(BRAYAN SOLARTE)
Route::get('vista_usuarios',[ProfileFatherController::class,'index2'])->name('vista_usuarios');
//ruta nivel (Brayan Solarte)
Route::get('vista_nivel',[ProfileFatherController::class,'index3'])->name('vista_nivel');

