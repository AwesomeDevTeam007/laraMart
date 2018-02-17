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

Route::get('backend/product_pricings', 'Backend\ProductPricingAPIController@index');
Route::post('backend/product_pricings', 'Backend\ProductPricingAPIController@store');
Route::get('backend/product_pricings/{product_pricings}', 'Backend\ProductPricingAPIController@show');
Route::put('backend/product_pricings/{product_pricings}', 'Backend\ProductPricingAPIController@update');
Route::patch('backend/product_pricings/{product_pricings}', 'Backend\ProductPricingAPIController@update');
Route::delete('backend/product_pricings{product_pricings}', 'Backend\ProductPricingAPIController@destroy');

Route::get('backend/product_attributes', 'Backend\ProductAttributeAPIController@index');
Route::post('backend/product_attributes', 'Backend\ProductAttributeAPIController@store');
Route::get('backend/product_attributes/{product_attributes}', 'Backend\ProductAttributeAPIController@show');
Route::put('backend/product_attributes/{product_attributes}', 'Backend\ProductAttributeAPIController@update');
Route::patch('backend/product_attributes/{product_attributes}', 'Backend\ProductAttributeAPIController@update');
Route::delete('backend/product_attributes{product_attributes}', 'Backend\ProductAttributeAPIController@destroy');

Route::get('backend/product_inventories', 'Backend\ProductInventoryAPIController@index');
Route::post('backend/product_inventories', 'Backend\ProductInventoryAPIController@store');
Route::get('backend/product_inventories/{product_inventories}', 'Backend\ProductInventoryAPIController@show');
Route::put('backend/product_inventories/{product_inventories}', 'Backend\ProductInventoryAPIController@update');
Route::patch('backend/product_inventories/{product_inventories}', 'Backend\ProductInventoryAPIController@update');
Route::delete('backend/product_inventories{product_inventories}', 'Backend\ProductInventoryAPIController@destroy');