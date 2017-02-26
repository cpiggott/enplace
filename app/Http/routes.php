<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LandingController@getHome');

Route::post('/scene', 'LandingController@postScene');

Route::get('/scene/{id}', 'LandingController@getScene');

Route::post('/scene/{id}/entity', 'EntityController@postEntity');

Route::get('/scene/{id}/edit/{id2}', 'LandingController@getEdit');


Route::get('/hello', 'LandingController@showHello');
