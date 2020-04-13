<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/items', 'ItemController@listItems');
Route::get('/item/{id}', 'ItemController@getItem');
Route::post('/item', 'ItemController@createNewItem');
Route::delete('/item/{id}', 'ItemController@deleteItem');
Route::put('/item', 'ItemController@updateItem');

Route::get('/cart', 'CartItemController@getCart');
Route::post('/cart', 'CartItemController@addItem');
Route::put('/cart', 'CartItemController@changeQuantity');
Route::delete('/cart', 'CartItemController@removeItem');
Route::get('/cart/list', 'CartItemController@listItems');
