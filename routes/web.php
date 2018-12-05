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

<<<<<<< HEAD
Route::get('/', 'HomeController@show');
Route::get('/registro', 'RegistroController@show');
Route::get('/login', 'LoginController@show');
Route::get('/pregfrec', 'PregfrecController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/faqs', 'FaqsController@index');
>>>>>>> c4a8b514a4f3c9e353cb52effcb323ebf47c80cc
