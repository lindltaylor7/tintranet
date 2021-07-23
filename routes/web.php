<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,'index'])->name("home")->middleware('auth');

Route::get('/login', function() {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro', [UserController::class, 'create'])->name('registro')->middleware('guest');
Route::post('/registro/usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/user/{id}/perfil', [UserController::class,'show'])->name("perfil")->middleware('auth');
Route::post('/user/foto/register', [UserController::class,'store'])->name("usuario.foto")->middleware('auth');
Route::put('/user/{id}/update', [UserController::class,'update'])->name("usuario.update")->middleware('auth');
