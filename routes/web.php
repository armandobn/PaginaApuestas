<?php

use App\Http\Controllers\ApuestasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

// Route::get('/', function(){
//   return view('inicio');
// });

Route::get('/',[SessionsController::class, 'index'])->name('usuario.index')->middleware('guest');
Route::post('/',[SessionsController::class, 'store'])->name('session.store');
Route::get('/logout',[SessionsController::class, 'destroy'])->name('usuario.destroy');

Route::get('/createUser',[RegisterController::class, 'create'])->name('usuario.create')->middleware('guest');
Route::post('/createUser',[RegisterController::class, 'store'])->name('usuario.store');

// Route::get('/crear',[ApuestasController::class, 'crear'])->name('apuesta.crear');

Route::get('/index',[ApuestasController::class, 'index'])->name('apuesta.index')->middleware('auth');
Route::get('/create',[ApuestasController::class, 'create'])->name('apuesta.create')->middleware('auth');
Route::post('/store',[ApuestasController::class, 'store'])->name('apuesta.store');

Route::get('/show/{apuestas}',[ApuestasController::class, 'show'])->name('apuesta.show')->middleware('auth');
Route::post('/show/{apuestas}',[ApuestasController::class, 'apostar'])->name('apuesta.apostar');

Route::get('/cartera/{user}/',[ApuestasController::class, 'cartera'])->name('apuesta.cartera')->middleware('auth');
Route::put('/cartera/{user}/sumar',[ApuestasController::class, 'edit'])->name('apuesta.edit');
Route::put('/cartera/{user}/restar',[ApuestasController::class, 'restar'])->name('apuesta.restar');

Route::get('/creacion',[ApuestasController::class, 'creacion'])->name('apuesta.creacion')->middleware('auth');
Route::post('/creacion',[ApuestasController::class, 'cerrarApuesta'])->name('apuesta.cerrarApuesta');
