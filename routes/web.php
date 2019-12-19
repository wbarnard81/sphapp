<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('pcreturns/create', 'PcreturnController@create');
Route::post('pcreturns/create', 'PcreturnController@store');

Route::get('pcreturns/{pcreturn}', 'PcreturnController@show')->middleware(['auth']);
Route::get('pcreturns', 'PcreturnController@index')->middleware(['auth']);
Route::patch('pcreturns/{pcreturn}', 'PcreturnController@update')->middleware(['auth']);
Route::delete('pcreturns/{pcreturn}', 'PcreturnController@destroy')->middleware(['auth']);
Route::get('pcreturns/{pcreturn}/edit', 'PcreturnController@edit')->middleware(['auth']);

Route::resource('/computers', 'ComputersController')->middleware(['auth']);
Route::resource('/birthdays', 'BirthdayController')->middleware(['auth']);
Route::get('/list', 'ComputersController@list')->middleware(['auth']);
Route::get('/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);
