<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('pcreturns', 'ReturnController@create');

Route::resource('/computers', 'ComputersController')->middleware(['auth']);
Route::resource('/birthdays', 'BirthdayController')->middleware(['auth']);
Route::resource('/pcreturns', 'PcreturnController')->middleware(['auth']);
Route::get('/list', 'ComputersController@list')->middleware(['auth']);
Route::get('/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);
