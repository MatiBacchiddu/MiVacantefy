<?php

use Illuminate\Support\Facades\Auth;
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

/* inicio */
Route::get('/', 'InicioController@index')->name('inicio.index');

// admin
Route::get('/admin', 'AdminController@index')->name('admin.index');

// admin vacantes
Route::get('/admin/vacantes/seleccion', 'VacantesController@seleccion')->name('vacanteAdmin.seleccion');
Route::get('/admin/vacantes', 'VacantesController@index')->name('vacanteAdmin.index');
Route::get('/admin/vacanteCrear', 'VacantesController@create')->name('vacanteAdmin.create');
Route::post('/vacante', 'VacantesController@store')->name('vacanteAdmin.store');

// perfiles
Route::put('/perfiles/{perfil}', 'PerfilController@update')->name('perfiles.update');
Route::get('/perfiles/{perfil}', 'PerfilController@show')->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', 'PerfilController@edit')->name('perfiles.edit');

// vacantes inicio
Route::get('/vacantes', 'VacantesInicioController@index')->name('vacantes.index');
Route::get('/vacantes/{vacantes}', 'VacantesController@show')->name('vacantes.show');

// postulaciones
Route::post('/vacantes/store', 'PostuladoController@store')->name('postulado.store');
Route::get('/postulados', 'PostuladoController@index')->name('postulado.index');
Route::get('/postulaciones/{user}', 'PostuladoController@show')->name('postulado.show');

// materias
Route::get('/materias/{materia}', 'MateriasController@show')->name('materias.show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
