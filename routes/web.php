<?php

use Illuminate\Support\Facades\Route;
use App\Item;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'items' => Item::all()->toArray(),
        'baseApi' => env('BASE_API', 'http://127.0.0.1:8000/api')
    ]);
});
