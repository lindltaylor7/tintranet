<?php

use App\Http\Controllers\areaController;
use App\Http\Controllers\departmentController;
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

/*======== DEPARTMENT ==========*/
Route::get('/departamentos',[departmentController::class, 'index'])->name("departamentos");
Route::get('/departamentos/create',[departmentController::class, 'create'])->name("departamentos.crear");
Route::post('/departamentos/store',[departmentController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/{id}/edit', [departmentController::class, 'edit'])->name("departamentos.editar");// apuntar a un enlace 
Route::put('/departamentos/{id}', [departmentController::class, 'update'])->name("departamentos.update");// actualizar 
Route::delete('/departamentos/{id}', [departmentController::class, 'destroy'])->name("departamentos.destroy");// eliminar

/*============ AREAS =================*/
Route::get('/area', [areaController::class, 'index'])->name('area');
Route::get('/area/create',[areaController::class, 'create'])->name('area.create');
Route::post('/area/store',[areaController::class, 'store'])->name('area.store');
Route::get('/area/{id}/{idDepartment}/edit',[areaController::class, 'edit'])->name('area.editar');
Route::put('/area/{id}',[areaController::class, 'update'])->name('area.update');
Route::delete('/area/{id}',[areaController::class, 'destroy'])->name('area.destroy');


Route::get('/user/{id}/perfil', [UserController::class,'show'])->name("perfil")->middleware('auth');
Route::post('/user/foto/register', [UserController::class,'store'])->name("usuario.foto")->middleware('auth');
Route::put('/user/{id}/update', [UserController::class,'update'])->name("usuario.update")->middleware('auth');

//ADMINISTRAR USUARIO
Route::put('/usuario/inactive/{id}', [UserController::class,'inactive'])->name("usuario.inactive");
Route::put('/usuario/active/{id}', [UserController::class,'active'])->name("usuario.active");
Route::delete('/usuario/{id}/delete', [UserController::class,'destroy'])->name("usuario.delete");
