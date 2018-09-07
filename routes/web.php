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

Route::get('/sphapp', 'HomeController@index')->name('welcome');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/sphapp/computers', 'ComputersController')->middleware(['auth']);
Route::get('/sphapp/computers', 'ComputersController@index');
Route::get('/sphapp/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/sphapp/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);

