<?php

use App\Http\Controllers\departmentController;
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

//  CRUD de los departamentos

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/registro', function() {
    return view('registro');
})->name('registro');

Route::get('/mi_perfil', function () {
    return view('usuario_perfil.usuario_perfil');
})->name("perfil");

Route::get('/departamentos',[departmentController::class, 'index'])->name("departamentos");

Route::get('/departamentos/create',[departmentController::class, 'create'])->name("departamentos.crear");

Route::post('/departamentos/store',[departmentController::class, 'store'])->name('departamentos.store');

// apuntar a un enlace 
Route::get('/departamentos/{id}/edit', [departmentController::class, 'edit'])->name("departamentos.editar");

// actualizar 
Route::put('/departamentos/{id}', [departmentController::class, 'update'])->name("departamentos.update");

// eliminar
Route::delete('/departamentos/{id}', [departmentController::class, 'destroy'])->name("departamentos.destroy");

