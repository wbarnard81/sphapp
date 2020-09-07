<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


Route::get('pcreturns/create', 'PcreturnController@create');
Route::post('pcreturns/create', 'PcreturnController@store');
Route::get('pcmove/create', 'PcmoveController@create');
Route::post('pcmove/create', 'PcmoveController@store');

Route::get('pcmove/{pcreturn}', 'PcmoveController@show')->middleware(['auth']);
Route::get('pcmove', 'PcmoveController@index')->middleware(['auth']);
Route::patch('pcmove/{pcreturn}', 'PcmoveController@update')->middleware(['auth']);
Route::delete('pcmove/{pcreturn}', 'PcmoveController@destroy')->middleware(['auth']);
Route::get('pcmove/{pcreturn}/edit', 'PcmoveController@edit')->middleware(['auth']);

Route::get('pcreturns/{pcreturn}', 'PcreturnController@show')->middleware(['auth']);
Route::get('pcreturns', 'PcreturnController@index')->middleware(['auth']);
Route::patch('pcreturns/{pcreturn}', 'PcreturnController@update')->middleware(['auth']);
Route::delete('pcreturns/{pcreturn}', 'PcreturnController@destroy')->middleware(['auth']);
Route::get('pcreturns/{pcreturn}/edit', 'PcreturnController@edit')->middleware(['auth']);

Route::resource('/computers', 'ComputersController')->middleware(['auth']);
Route::resource('/birthdays', 'BirthdayController')->middleware(['auth']);
Route::resource('/settings', 'SettingController')->middleware(['auth']);
Route::get('/list', 'ComputersController@list')->middleware(['auth']);
Route::get('/computers/{id}/edit', 'ComputersController@edit')->middleware(['auth']);
Route::get('/computers/{id}/delete', 'ComputersController@destroy')->middleware(['auth']);
