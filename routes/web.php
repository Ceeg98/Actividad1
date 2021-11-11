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

Route::get('/login', function () {
    return view('login');
});

Route::get('/componentes', 'App\Http\Controllers\ComponentesController@consultar');
Route::get('/agregarComponentes', 'App\Http\Controllers\ComponentesController@agregar');
Route::get('/actualizarComponentes', 'App\Http\Controllers\ComponentesController@actualizar');
Route::get('/eliminarComponentes', 'App\Http\Controllers\ComponentesController@borrar');
