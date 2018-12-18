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
Route::resource('products','ProductController');
Route::get('/', 'HomeController@index');
Route::get('/faqs', 'FaqsController@index');
Route::get('/productos', 'ProductController@index')->name('productos');
Route::get('/create', 'ProductController@create')->name('create'); //Fomulario de carga
Route::post('/create', 'ProductController@store'); //Guarda en Base de Datos
Route::get('/edit/{id}', 'ProductController@edit');//formulacion de edicion de productos
Route::post('/edit', 'ProductController@store');
Route::get('/productos/{id}', 'ProductController@MostrarProducto');
Route::delete('/delete', 'ProductController@destroy');
Route::post('productos/{id}/edit', 'ProductController@update')->name('update');
Route::get('/listaAdmin', 'ProductController@lista')->name('lista');
