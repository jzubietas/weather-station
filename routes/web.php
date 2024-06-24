<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');

//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('suscriptores', [App\Http\Controllers\HomeController::class, 'suscriptores'])->name('suscriptores');

Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('suscriptores-list',[App\Http\Controllers\HomeController::class, 'suscriptoreslist'])->name('suscriptores-list');

Route::get('claveapp', [App\Http\Controllers\HomeController::class, 'claveapp'])->name('claveapp');
Route::get('adduser', [App\Http\Controllers\HomeController::class, 'adduser'])->name('adduser');
Route::get('ndealer', [App\Http\Controllers\HomeController::class, 'ndealer'])->name('ndealer');
Route::get('ldealer', [App\Http\Controllers\HomeController::class, 'ldealer'])->name('ldealer');
Route::get('versionApp', [App\Http\Controllers\HomeController::class, 'versionApp'])->name('versionApp');
Route::get('luploaders', [App\Http\Controllers\HomeController::class, 'luploaders'])->name('luploaders');
Route::get('nuploader', [App\Http\Controllers\HomeController::class, 'nuploader'])->name('nuploader');
Route::get('categoriasvod', [App\Http\Controllers\HomeController::class, 'categoriasvod'])->name('categoriasvod');
Route::get('logolive', [App\Http\Controllers\HomeController::class, 'logolive'])->name('logolive');
Route::get('eadmin', [App\Http\Controllers\HomeController::class, 'eadmin'])->name('eadmin');
Route::get('baneados', [App\Http\Controllers\HomeController::class, 'baneados'])->name('baneados');
Route::get('mensajes_panel', [App\Http\Controllers\HomeController::class, 'mensajes_panel'])->name('mensajes_panel');
Route::get('dcreditos', [App\Http\Controllers\HomeController::class, 'dcreditos'])->name('dcreditos');
Route::get('bitacora', [App\Http\Controllers\HomeController::class, 'bitacora'])->name('bitacora');
Route::get('sugerencia', [App\Http\Controllers\HomeController::class, 'sugerencia'])->name('sugerencia');
Route::get('reportelinkcaido', [App\Http\Controllers\HomeController::class, 'reportelinkcaido'])->name('reportelinkcaido');
Route::get('noveda_agregada', [App\Http\Controllers\HomeController::class, 'noveda_agregada'])->name('noveda_agregada');
Route::get('mensajes_usuario', [App\Http\Controllers\HomeController::class, 'mensajes_usuario'])->name('mensajes_usuario');
