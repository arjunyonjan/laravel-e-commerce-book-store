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
Route::get('/', ['as' => 'index', 'uses' => 'BookController@getIndex']);

Route::post('/user/login',['uses' => 'UserController@postLogin']);
Route::get('/user/logout', ['uses' => 'UserController@getLogout']);

Route::post('/cart/add',[
	'before' => 'auth.basic', //login basic authentication
	'uses' => 'CartController@postAddToCart'
]);

Route::get('/cart', [
	'before' => 'auth.basic',
	'as'=>'cart',
	'uses' => 'CartController@getIndex'
]);

Route::get('/cart/delete/{id}',[
	'before' => 'auth.basic',
	'as' => 'delete_book_from_cart',
	'uses' => 'CartController@getDelete'
]);


/*---------------------- order -----------------------*/
Route::post('/order', [
	'before' => 'auth.basic',
	'uses' => 'OrderController@postOrder'
]);


Route::get('/user/orders', [
	'before' => 'auth.basic',
	'uses' => 'OrderController@getIndex'
]);


//thanks for watching........
//continued............

//subscribe, share, like.....................