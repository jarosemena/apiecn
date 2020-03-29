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

Route::get('/tareas', 'TaskController@index');
Route::put('/tareas/actualizar', 'TaskController@update');
Route::post('/tareas/guardar', 'TaskController@store');
Route::delete('/tareas/borrar/{id}', 'TaskController@destroy');
Route::get('/tareas/buscar', 'TaskController@show');

Route::get('/solicitudes', 'SolicitudesController@index');
Route::get('/solicitud/{id}', 'SolicitudesController@show');
Route::put('/solicitud/actualizar/', 'SolicitudesController@update');
Route::post('/solicitud/guardar', 'SolicitudesController@store');
Route::delete('/solicitud/borrar/{id}&{user}', 'SolicitudesController@destroy');

Route::get('/personas', 'PersonasController@index');
Route::get('/persona/{id}', 'PersonasController@show');
Route::put('/persona/actualizar/', 'PersonasController@update');
Route::post('/persona/guardar', 'PersonasController@store');
Route::delete('/persona/borrar/{id}&{user}', 'PersonasController@destroy');

Route::get('/personasdetalle/{id}', 'PersonasdetallesController@show');
Route::put('/personasdetalle/actualizar/', 'PersonasdetallesController@update');
Route::post('/personasdetalle/guardar', 'PersonasdetallesController@store');
Route::delete('/personasdetalle/borrar/{id}&{user}', 'PersonasdetallesController@destroy');

Route::get('/parroquias', 'ParroquiasController@index');
Route::get('/parroquia/{id}', 'ParroquiasController@show');
Route::put('/parroquia/actualizar/', 'ParroquiasController@update');
Route::post('/parroquia/guardar', 'ParroquiasController@store');
Route::delete('/parroquia/borrar/{id}&{user}', 'ParroquiasController@destroy');

Route::get('/noches', 'NochesController@index');
Route::get('/noches/{id}', 'NochesController@show');
Route::put('/noches/actualizar/', 'NochesController@update');
Route::post('/noches/guardar', 'NochesController@store');
Route::delete('/noches/borrar/{id}&{user}', 'NochesController@destroy');

Route::get('/fds', 'FdsController@index');
Route::get('/fds/{id}', 'FdsController@show');
Route::put('/fds/actualizar/', 'FdsController@update');
Route::post('/fds/guardar', 'FdsController@store');
Route::delete('/fds/borrar/{id}&{user}', 'FdsController@destroy');

Route::get('/casasretiro', 'CasasretiroController@index');
Route::get('/casaretiro/{id}', 'CasasretiroController@show');
Route::put('/casaretiro/actualizar/', 'CasasretiroController@update');
Route::post('/casaretiro/guardar', 'CasasretiroController@store');
Route::delete('/casaretiro/borrar/{id}&{user}', 'CasasretiroController@destroy');