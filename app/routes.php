<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('/create', 'EntryController@store');
Route::patch('/{id}/edit', 'EntryController@update');
Route::delete('/{id}', 'EntryController@destroy');
Route::post('/{id}', 'EntryController@createComment');

Route::get('/', 'EntryController@index');
Route::get('/create', 'EntryController@create');
Route::get('/{id}', 'EntryController@show');
Route::get('/{id}/edit', 'EntryController@edit');




