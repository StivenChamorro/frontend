<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rutas Tienda (HAIVE VELASCO)
Route::get('vista_1_store',[StoreController::class,'store_view_1'])->name('view_1_store');
Route::get('vista_2_store',[StoreController::class,'store_view_2'])->name('vista_2_store');
Route::get('vista_3_store',[StoreController::class,'store_view_3'])->name('vista_3_store');
//Ruta Logros (HAIVE VELASCO)
Route::get('vista_1_achievement',[AchievementController::class,'achievement_view_1'])->name('vista_1_achievement');