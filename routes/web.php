<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/computers', 'ComputersController')->middleware(['auth']);
Route::get('/list', 'ComputersController@list');
Route::get('/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);


