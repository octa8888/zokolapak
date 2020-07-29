<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users/{id}', function ($id) {
    return response()->json(
        [
            [
                "name"=>"ashiap".$id,
                "email"=>"a@a.com"
            ],[
                "name"=>"atidakshiap",
                "email"=>"n@n.com"
            ]
        ]
    );
});

Route::get('products', 'ProductController@getAllProducts');
Route::post('products', 'ProductController@insertProduct');