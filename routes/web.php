<?php

use App\CartItem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/edit', 'EditController@index')->name('edit');
Route::get('/browse', 'BrowseController@index')->name('browse');
Route::get('/cart', function () {
    $cartItems = collect();
    CartItem::where('user_id', Auth::id())->get()->each(function ($ci) use (&$cartItems) {
        $item_name = App\Item::find($ci->item_id)->name;
        $cartItems = $cartItems->concat([
            [
                'name' => $item_name,
                'quantity' => $ci->quantity,
            ]
        ]);
    });

    return view('cart', [
        'cartItems' => $cartItems,
    ]);
})->name('cart')->middleware('auth');
