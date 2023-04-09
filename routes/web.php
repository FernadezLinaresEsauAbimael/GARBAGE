<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth'); 
Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('auth');
Route::resource('estados', App\Http\Controllers\EstadoController::class)->middleware('auth');
Route::resource('municipios', App\Http\Controllers\MunicipioController::class)->middleware('auth');
Route::resource('horarios', App\Http\Controllers\HorarioController::class)->middleware('auth');
Route::resource('rutas', App\Http\Controllers\RutaController::class)->middleware('auth');
Route::resource('camiones', App\Http\Controllers\CamioneController::class)->middleware('auth');
Route::resource('terminales', App\Http\Controllers\TerminaleController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
