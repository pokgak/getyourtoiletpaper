<?php

use App\Item;
use Illuminate\Http\Request;
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

Route::get('/items', function () {
    return response()->json([
        ["id" => 1, "name" => "test", "description" => "hola"],
        ["id" => 2, "name" => "test2", "description" => "moinmoin"],
    ]);
});

Route::get('/item/{id}', function ($id) {
    return response()->json([
        "id" => $id, "name" => "blau", "description" => "testtest"
    ]);
});

Route::post('/item', function (Request $request) {
    return response('100', 200);
});

Route::delete('/item/{id}', function ($id) {
    return response(404);
});

Route::put('/item', function (Request $request) {
    return response()->json([
        "id" => $request->id,
        "name" => $request->name,
        "description" => $request->description,
    ]);
});
