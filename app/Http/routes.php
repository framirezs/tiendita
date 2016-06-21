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

Route::get('/', [
'as' => 'home',
'uses' => 'StoreController@home'
]);

Route::get('{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@producto'
]);

Route::get('/categorias', [
	'as' => 'categorias',
	'uses' => 'StoreController@categorias'
]);


