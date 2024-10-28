<?php




use App\Http\Controllers\HomeController;


use App\Http\Controllers\AddChildController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsController;

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StoreController;

use App\Http\Controllers\ProfileFatherController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('home',[HomeController::class,'Home'])->name('home');
Route::get('header',[HomeController::class,'Header']);
Route::get('header1',[HomeController::class,'header1']);
Route::get('woopergame',[LevelController::class, 'Woopergame'])->name('woopergame');



Route::get('login',[LoginController::class,'store'])->name('iniciarsesion');
Route::get('register',[RegisterController::class,'store'])->name('registro');
Route::get('add_child',[AddChildController::class,'store'])->name('add_child');
Route::get('terms',[TermsController::class,'store'])->name('terminos');
Route::get('profilefather',[ProfileController::class,'store'])->name('profile');

//Rutas Tienda (HAIVE VELASCO)
Route::get('vista_3_store',[StoreController::class,'store_view_3'])->name('vista_3_store');

//Ruta Logros (HAIVE VELASCO)
Route::get('vista_1_achievement',[AchievementController::class,'achievement_view_1'])->name('vista_1_achievement');

//main
//Ruta perfil padre(BRAYAN SOLARTE)
Route::get('perfil_padre',[ProfileFatherController::class,'index'])->name('profile_father');
//Ruta usuarios registrados(BRAYAN SOLARTE)
Route::get('vista_usuarios',[ProfileFatherController::class,'index2'])->name('father_users');
//Ruta plantilla del nivel de matematicas(BRAYAN SOLARTE)
Route::get('vista_niveles',[HomeController::class,'nivel1'])->name('view_lelvel');



