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



Route::get('/',[SessionsController::class, 'index'])->name('usuario.index');
Route::post('/gg',[SessionsController::class, 'store'])->name('usuario.store');
Route::get('/logout',[SessionsController::class, 'destroy'])->name('usuario.destroy');

Route::get('/createUser',[RegisterController::class, 'create'])->name('usuario.create');
Route::post('/createUser',[RegisterController::class, 'store'])->name('usuario.store');

Route::get('/index',[ApuestasController::class, 'index'])->name('apuesta.index');
Route::get('/create',[ApuestasController::class, 'create'])->name('apuesta.create');
Route::get('/show',[ApuestasController::class, 'show'])->name('apuesta.show');
Route::get('/cartera',[ApuestasController::class, 'cartera'])->name('apuesta.cartera');
Route::get('/tragaPerras',[ApuestasController::class, 'tragaperras'])->name('apuesta.tragaperras');
