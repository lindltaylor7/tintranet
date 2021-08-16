<?php

use App\Http\Controllers\areaController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
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


Route::get('/', [HomeController::class,'index'])->name("home")->middleware('auth')->middleware('can:Inicio');

Route::get('/login', function() {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro', [UserController::class, 'create'])->name('registro')->middleware('guest');
Route::post('/registro/usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/departamentos',[departmentController::class, 'index'])->name("departamentos")->middleware('can:Departamentos');
Route::get('/departamentos/create',[departmentController::class, 'create'])->name("departamentos.crear")->middleware('can:Departamentos');
Route::post('/departamentos/store',[departmentController::class, 'store'])->name('departamentos.store')->middleware('can:Departamentos');
// apuntar a un enlace 
Route::get('/departamentos/{id}/edit', [departmentController::class, 'edit'])->name("departamentos.editar")->middleware('can:Departamentos');
// actualizar 
Route::put('/departamentos/{id}', [departmentController::class, 'update'])->name("departamentos.update")->middleware('can:Departamentos');
// eliminar
Route::delete('/departamentos/{id}', [departmentController::class, 'destroy'])->name("departamentos.destroy")->middleware('can:Departamentos');

/*============ AREAS =================*/
Route::get('/area', [areaController::class, 'index'])->name('area')->middleware('can:Areas');
Route::get('/area/create',[areaController::class, 'create'])->name('area.create')->middleware('can:Areas');
Route::post('/area/store',[areaController::class, 'store'])->name('area.store')->middleware('can:Areas');
Route::get('/area/{id}/{idDepartment}/edit',[areaController::class, 'edit'])->name('area.editar')->middleware('can:Areas');
Route::put('/area/{id}',[areaController::class, 'update'])->name('area.update')->middleware('can:Areas');
Route::delete('/area/{id}',[areaController::class, 'destroy'])->name('area.destroy')->middleware('can:Areas');

Route::get('/user/{id}/perfil', [UserController::class,'show'])->name("perfil")->middleware('auth')->middleware('can:Perfil');
Route::post('/user/foto/register', [UserController::class,'store'])->name("usuario.foto")->middleware('auth')->middleware('can:Perfil');
Route::put('/user/{id}/update', [UserController::class,'update'])->name("usuario.update")->middleware('auth')->middleware('can:Usuarios');

//ADMINISTRAR USUARIO
Route::put('/usuario/inactive/{id}', [UserController::class,'inactive'])->name("usuario.inactive")->middleware('can:Perfil');
Route::put('/usuario/active/{id}', [UserController::class,'active'])->name("usuario.active")->middleware('can:Perfil');
Route::delete('/usuario/{id}/delete', [UserController::class,'destroy'])->name("usuario.delete")->middleware('can:Perfil');

//CRUD Roles
Route::get('/roles',[RoleController::class, 'index'])->name("roles")->middleware('auth')->middleware('can:Roles');
Route::post('/rol/register',[RoleController::class, 'store'])->name("role.register")->middleware('auth')->middleware('can:Roles');
Route::put('/rol/{id}/update',[RoleController::class, 'update'])->name("role.update")->middleware('auth')->middleware('can:Roles');
Route::delete('/rol/{id}/delete',[RoleController::class, 'destroy'])->name("role.delete")->middleware('auth')->middleware('can:Roles');
