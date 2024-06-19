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
