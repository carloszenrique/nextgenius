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

// Ruta inicial
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Auth::routes();

// Ruta para agregar una evaluacion
Route::post('/evaluacion/agregar', 'EvaluacionController@agregarEvaluacion')->name('welcomeAgregar');

// Ruta para llamar a la tabla de evaluaciones
Route::get('/home', 'HomeController@index')->name('home');

// Ruta para abrir el modal
Route::get('/home/{evaluaciones}', 'HomeController@abrirModal')->name('homeModal');

// Ruta para hacer eliminacion logica
Route::delete('/home/{evaluaciones}', 'HomeController@eliminar')->name('homeEliminar');
