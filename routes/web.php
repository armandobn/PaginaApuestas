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

Route::get('/',[SessionsController::class, 'index'])->name('usuario.index');
Route::post('/gg',[SessionsController::class, 'store'])->name('session.store');
Route::get('/logout',[SessionsController::class, 'destroy'])->name('usuario.destroy');

Route::get('/createUser',[RegisterController::class, 'create'])->name('usuario.create');
Route::post('/createUser',[RegisterController::class, 'store'])->name('usuario.store');

Route::get('/crear',[ApuestasController::class, 'crear'])->name('apuesta.crear');

Route::get('/index',[ApuestasController::class, 'index'])->name('apuesta.index');
Route::get('/create',[ApuestasController::class, 'create'])->name('apuesta.create');
Route::post('/store',[ApuestasController::class, 'store'])->name('apuesta.store');

Route::get('/show/{apuestas}',[ApuestasController::class, 'show'])->name('apuesta.show');
Route::post('/show/{apuestas}',[ApuestasController::class, 'apostar'])->name('apuesta.apostar');

Route::get('/cartera/{user}/',[ApuestasController::class, 'cartera'])->name('apuesta.cartera');
Route::put('/cartera/{user}/sumar',[ApuestasController::class, 'edit'])->name('apuesta.edit');
Route::put('/cartera/{user}/restar',[ApuestasController::class, 'restar'])->name('apuesta.restar');


