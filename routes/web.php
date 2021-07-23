<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name("home");


Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/registro', function() {
    return view('registro');
})->name('registro');



Route::get('/user/{id}/perfil', [UserController::class,'show'])->name("perfil");
Route::post('/user/foto/register', [UserController::class,'store'])->name("usuario.foto");
Route::put('/user/{id}/update', [UserController::class,'update'])->name("usuario.update");


