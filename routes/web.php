<?php

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

Route::get('/', 'Controller@index');
Route::post('/', 'Controller@index');

Route::get('/login', 'Controller@login');

Route::get('/alumnos', 'Controller@filtrarPorAlumnos');
Route::get('/responsables', 'Controller@filtrarPorResponsables');

Route::get('/logout', 'Controller@logout');

Route::get('/notificaciones', 'Controller@notificaciones');

Route::get('/eventos', 'Controller@eventos');