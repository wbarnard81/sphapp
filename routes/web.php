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

Route::get('/', 'HomeController@index')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('computers', 'ComputersController')->middleware(['auth']);
Route::get('/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);
