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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/faqs', 'FaqsController@index');
Route::get('/productos', 'ProductController@index');

Route::get('/create', 'ProductController@create'); //Fomulario de carga
Route::post('/create', 'ProductController@store'); //Guarda en Base de Datos

Route::get('/productos/{id}', 'ProductController@MostrarProducto');
