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
