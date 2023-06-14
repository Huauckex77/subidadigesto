<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();



route::resource('autoridades', App\Http\Controllers\AutoridadeController::class)->middleware('auth');

route::resource('subcategorias', App\Http\Controllers\SubcategoriaController::class)->middleware('auth');

route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

route::resource('programas', App\Http\Controllers\ProgramaController::class)->middleware('auth');

route::resource('tipoaccesos', App\Http\Controllers\TipoaccesoController::class)->middleware('auth');

route::resource('tipodocs', App\Http\Controllers\TipodocController::class)->middleware('auth');

route::resource('claves', App\Http\Controllers\ClafeController::class)->middleware('auth');

route::resource('tipoestados', App\Http\Controllers\TipoestadoController::class)->middleware('auth');

route::resource('dependencias', App\Http\Controllers\DependenciaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
