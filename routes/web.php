<?php

<<<<<<< HEAD
use App\Http\Controllers\departmentController;
=======
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
>>>>>>> 7bdb5a1b370e4c72e93ad07c85f1059075bf7de5
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

<<<<<<< HEAD
//  CRUD de los departamentos

Route::get('/', function () {
    return view('welcome');
})->name('home');
=======
Route::get('/', [HomeController::class,'index'])->name("home")->middleware('auth');
>>>>>>> 7bdb5a1b370e4c72e93ad07c85f1059075bf7de5

Route::get('/login', function() {
    return view('login');
})->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registro', [UserController::class, 'create'])->name('registro')->middleware('guest');
Route::post('/registro/usuario', [UserController::class, 'store'])->name('user.store');

<<<<<<< HEAD
Route::get('/departamentos',[departmentController::class, 'index'])->name("departamentos");

Route::get('/departamentos/create',[departmentController::class, 'create'])->name("departamentos.crear");

Route::post('/departamentos/store',[departmentController::class, 'store'])->name('departamentos.store');

// apuntar a un enlace 
Route::get('/departamentos/{id}/edit', [departmentController::class, 'edit'])->name("departamentos.editar");

// actualizar 
Route::put('/departamentos/{id}', [departmentController::class, 'update'])->name("departamentos.update");

// eliminar
Route::delete('/departamentos/{id}', [departmentController::class, 'destroy'])->name("departamentos.destroy");

=======
Route::get('/user/{id}/perfil', [UserController::class,'show'])->name("perfil")->middleware('auth');
Route::post('/user/foto/register', [UserController::class,'store'])->name("usuario.foto")->middleware('auth');
Route::put('/user/{id}/update', [UserController::class,'update'])->name("usuario.update")->middleware('auth');
>>>>>>> 7bdb5a1b370e4c72e93ad07c85f1059075bf7de5
