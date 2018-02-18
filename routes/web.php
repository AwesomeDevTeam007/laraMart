<?php

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

Route::get('/home', 'HomeController@index');

Route::get('backend/products', ['as'=> 'backend.products.index', 'uses' => 'Backend\ProductController@index']);
Route::post('backend/products', ['as'=> 'backend.products.store', 'uses' => 'Backend\ProductController@store']);
Route::get('backend/products/create', ['as'=> 'backend.products.create', 'uses' => 'Backend\ProductController@create']);
Route::put('backend/products/{products}', ['as'=> 'backend.products.update', 'uses' => 'Backend\ProductController@update']);
Route::patch('backend/products/{products}', ['as'=> 'backend.products.update', 'uses' => 'Backend\ProductController@update']);
Route::delete('backend/products/{products}', ['as'=> 'backend.products.destroy', 'uses' => 'Backend\ProductController@destroy']);
Route::get('backend/products/{products}', ['as'=> 'backend.products.show', 'uses' => 'Backend\ProductController@show']);
Route::get('backend/products/{products}/edit', ['as'=> 'backend.products.edit', 'uses' => 'Backend\ProductController@edit']);


Route::get('backend/productPricings', ['as'=> 'backend.productPricings.index', 'uses' => 'Backend\ProductPricingController@index']);
Route::post('backend/productPricings', ['as'=> 'backend.productPricings.store', 'uses' => 'Backend\ProductPricingController@store']);
Route::get('backend/productPricings/create', ['as'=> 'backend.productPricings.create', 'uses' => 'Backend\ProductPricingController@create']);
Route::put('backend/productPricings/{productPricings}', ['as'=> 'backend.productPricings.update', 'uses' => 'Backend\ProductPricingController@update']);
Route::patch('backend/productPricings/{productPricings}', ['as'=> 'backend.productPricings.update', 'uses' => 'Backend\ProductPricingController@update']);
Route::delete('backend/productPricings/{productPricings}', ['as'=> 'backend.productPricings.destroy', 'uses' => 'Backend\ProductPricingController@destroy']);
Route::get('backend/productPricings/{productPricings}', ['as'=> 'backend.productPricings.show', 'uses' => 'Backend\ProductPricingController@show']);
Route::get('backend/productPricings/{productPricings}/edit', ['as'=> 'backend.productPricings.edit', 'uses' => 'Backend\ProductPricingController@edit']);


Route::get('backend/productAttributes', ['as'=> 'backend.productAttributes.index', 'uses' => 'Backend\ProductAttributeController@index']);
Route::post('backend/productAttributes', ['as'=> 'backend.productAttributes.store', 'uses' => 'Backend\ProductAttributeController@store']);
Route::get('backend/productAttributes/create', ['as'=> 'backend.productAttributes.create', 'uses' => 'Backend\ProductAttributeController@create']);
Route::put('backend/productAttributes/{productAttributes}', ['as'=> 'backend.productAttributes.update', 'uses' => 'Backend\ProductAttributeController@update']);
Route::patch('backend/productAttributes/{productAttributes}', ['as'=> 'backend.productAttributes.update', 'uses' => 'Backend\ProductAttributeController@update']);
Route::delete('backend/productAttributes/{productAttributes}', ['as'=> 'backend.productAttributes.destroy', 'uses' => 'Backend\ProductAttributeController@destroy']);
Route::get('backend/productAttributes/{productAttributes}', ['as'=> 'backend.productAttributes.show', 'uses' => 'Backend\ProductAttributeController@show']);
Route::get('backend/productAttributes/{productAttributes}/edit', ['as'=> 'backend.productAttributes.edit', 'uses' => 'Backend\ProductAttributeController@edit']);


Route::get('backend/productInventories', ['as'=> 'backend.productInventories.index', 'uses' => 'Backend\ProductInventoryController@index']);
Route::post('backend/productInventories', ['as'=> 'backend.productInventories.store', 'uses' => 'Backend\ProductInventoryController@store']);
Route::get('backend/productInventories/create', ['as'=> 'backend.productInventories.create', 'uses' => 'Backend\ProductInventoryController@create']);
Route::put('backend/productInventories/{productInventories}', ['as'=> 'backend.productInventories.update', 'uses' => 'Backend\ProductInventoryController@update']);
Route::patch('backend/productInventories/{productInventories}', ['as'=> 'backend.productInventories.update', 'uses' => 'Backend\ProductInventoryController@update']);
Route::delete('backend/productInventories/{productInventories}', ['as'=> 'backend.productInventories.destroy', 'uses' => 'Backend\ProductInventoryController@destroy']);
Route::get('backend/productInventories/{productInventories}', ['as'=> 'backend.productInventories.show', 'uses' => 'Backend\ProductInventoryController@show']);
Route::get('backend/productInventories/{productInventories}/edit', ['as'=> 'backend.productInventories.edit', 'uses' => 'Backend\ProductInventoryController@edit']);


Route::get('backend/branches', ['as'=> 'backend.branches.index', 'uses' => 'Backend\BranchController@index']);
Route::post('backend/branches', ['as'=> 'backend.branches.store', 'uses' => 'Backend\BranchController@store']);
Route::get('backend/branches/create', ['as'=> 'backend.branches.create', 'uses' => 'Backend\BranchController@create']);
Route::put('backend/branches/{branches}', ['as'=> 'backend.branches.update', 'uses' => 'Backend\BranchController@update']);
Route::patch('backend/branches/{branches}', ['as'=> 'backend.branches.update', 'uses' => 'Backend\BranchController@update']);
Route::delete('backend/branches/{branches}', ['as'=> 'backend.branches.destroy', 'uses' => 'Backend\BranchController@destroy']);
Route::get('backend/branches/{branches}', ['as'=> 'backend.branches.show', 'uses' => 'Backend\BranchController@show']);
Route::get('backend/branches/{branches}/edit', ['as'=> 'backend.branches.edit', 'uses' => 'Backend\BranchController@edit']);
