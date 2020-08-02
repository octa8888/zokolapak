<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CartController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('users', 'UserController@getAllUser');
Route::get('user/{id}', 'UserController@getUserById');
Route::post('user', 'UserController@insertUser');
Route::put('user/{id}', 'UserController@updateUser');

Route::get('products', 'ProductController@getAllProduct');
Route::get('product/{id}', 'ProductController@getProductById');
Route::post('product', 'ProductController@insertProduct');
Route::put('product/{id}', 'ProductController@updateProduct');

Route::get('transactions/user/{id}', 'TransactionController@getTransactionsByUserId');
Route::get('transaction/{id}','TransactionController@getTransactionById');
Route::post('transaction','TransactionController@insertTransaction');

Route::get('cart/user/{id}', 'CartController@getCartByUserId');
Route::post('cart', 'CartController@insertCart');