<?php

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


Route::get('backend/products', 'Backend\ProductAPIController@index');
Route::post('backend/products', 'Backend\ProductAPIController@store');
Route::get('backend/products/{products}', 'Backend\ProductAPIController@show');
Route::put('backend/products/{products}', 'Backend\ProductAPIController@update');
Route::patch('backend/products/{products}', 'Backend\ProductAPIController@update');
Route::delete('backend/products{products}', 'Backend\ProductAPIController@destroy');