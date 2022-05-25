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
    return view('welcome');
});
Route::get('/home/Welcome',[\App\Http\Controllers\HomeController::class,'welc'])->name('welcome');
Route::get('/home/Document',[\App\Http\Controllers\HomeController::class,'doc'])->name('document');
Route::get('/home/Configuraciones',[\App\Http\Controllers\HomeController::class,'config'])->name('configuracion');
Route::post('/formulario2', [\App\Http\Controllers\HomeController::class, 'save'])->name('save');
