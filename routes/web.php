<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');


Route::get('/login', function() {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/registro', [UserController::class, 'create'])->name('registro')->middleware('guest');
Route::post('/registro/usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/mi_perfil', function () {
    return view('usuario_perfil.usuario_perfil');
})->name("perfil")->middleware('auth');

