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


Route::get('admin/categories', 'Admin\CategoryAPIController@index');
Route::post('admin/categories', 'Admin\CategoryAPIController@store');
Route::get('admin/categories/{categories}', 'Admin\CategoryAPIController@show');
Route::put('admin/categories/{categories}', 'Admin\CategoryAPIController@update');
Route::patch('admin/categories/{categories}', 'Admin\CategoryAPIController@update');
Route::delete('admin/categories{categories}', 'Admin\CategoryAPIController@destroy');

Route::get('admin/branches', 'Admin\BranchAPIController@index');
Route::post('admin/branches', 'Admin\BranchAPIController@store');
Route::get('admin/branches/{branches}', 'Admin\BranchAPIController@show');
Route::put('admin/branches/{branches}', 'Admin\BranchAPIController@update');
Route::patch('admin/branches/{branches}', 'Admin\BranchAPIController@update');
Route::delete('admin/branches{branches}', 'Admin\BranchAPIController@destroy');

Route::get('admin/locations', 'Admin\LocationAPIController@index');
Route::post('admin/locations', 'Admin\LocationAPIController@store');
Route::get('admin/locations/{locations}', 'Admin\LocationAPIController@show');
Route::put('admin/locations/{locations}', 'Admin\LocationAPIController@update');
Route::patch('admin/locations/{locations}', 'Admin\LocationAPIController@update');
Route::delete('admin/locations{locations}', 'Admin\LocationAPIController@destroy');

Route::get('admin/products', 'Admin\ProductAPIController@index');
Route::post('admin/products', 'Admin\ProductAPIController@store');
Route::get('admin/products/{products}', 'Admin\ProductAPIController@show');
Route::put('admin/products/{products}', 'Admin\ProductAPIController@update');
Route::patch('admin/products/{products}', 'Admin\ProductAPIController@update');
Route::delete('admin/products{products}', 'Admin\ProductAPIController@destroy');

Route::get('admin/product_images', 'Admin\ProductImageAPIController@index');
Route::post('admin/product_images', 'Admin\ProductImageAPIController@store');
Route::get('admin/product_images/{product_images}', 'Admin\ProductImageAPIController@show');
Route::put('admin/product_images/{product_images}', 'Admin\ProductImageAPIController@update');
Route::patch('admin/product_images/{product_images}', 'Admin\ProductImageAPIController@update');
Route::delete('admin/product_images{product_images}', 'Admin\ProductImageAPIController@destroy');

Route::get('admin/product_attributes', 'Admin\ProductAttributeAPIController@index');
Route::post('admin/product_attributes', 'Admin\ProductAttributeAPIController@store');
Route::get('admin/product_attributes/{product_attributes}', 'Admin\ProductAttributeAPIController@show');
Route::put('admin/product_attributes/{product_attributes}', 'Admin\ProductAttributeAPIController@update');
Route::patch('admin/product_attributes/{product_attributes}', 'Admin\ProductAttributeAPIController@update');
Route::delete('admin/product_attributes{product_attributes}', 'Admin\ProductAttributeAPIController@destroy');

Route::get('admin/product_inventories', 'Admin\ProductInventoryAPIController@index');
Route::post('admin/product_inventories', 'Admin\ProductInventoryAPIController@store');
Route::get('admin/product_inventories/{product_inventories}', 'Admin\ProductInventoryAPIController@show');
Route::put('admin/product_inventories/{product_inventories}', 'Admin\ProductInventoryAPIController@update');
Route::patch('admin/product_inventories/{product_inventories}', 'Admin\ProductInventoryAPIController@update');
Route::delete('admin/product_inventories{product_inventories}', 'Admin\ProductInventoryAPIController@destroy');

Route::get('admin/product_prices', 'Admin\ProductPriceAPIController@index');
Route::post('admin/product_prices', 'Admin\ProductPriceAPIController@store');
Route::get('admin/product_prices/{product_prices}', 'Admin\ProductPriceAPIController@show');
Route::put('admin/product_prices/{product_prices}', 'Admin\ProductPriceAPIController@update');
Route::patch('admin/product_prices/{product_prices}', 'Admin\ProductPriceAPIController@update');
Route::delete('admin/product_prices{product_prices}', 'Admin\ProductPriceAPIController@destroy');

Route::get('admin/product_offers', 'Admin\ProductOfferAPIController@index');
Route::post('admin/product_offers', 'Admin\ProductOfferAPIController@store');
Route::get('admin/product_offers/{product_offers}', 'Admin\ProductOfferAPIController@show');
Route::put('admin/product_offers/{product_offers}', 'Admin\ProductOfferAPIController@update');
Route::patch('admin/product_offers/{product_offers}', 'Admin\ProductOfferAPIController@update');
Route::delete('admin/product_offers{product_offers}', 'Admin\ProductOfferAPIController@destroy');

Route::get('admin/product_tier_prices', 'Admin\ProductTierPriceAPIController@index');
Route::post('admin/product_tier_prices', 'Admin\ProductTierPriceAPIController@store');
Route::get('admin/product_tier_prices/{product_tier_prices}', 'Admin\ProductTierPriceAPIController@show');
Route::put('admin/product_tier_prices/{product_tier_prices}', 'Admin\ProductTierPriceAPIController@update');
Route::patch('admin/product_tier_prices/{product_tier_prices}', 'Admin\ProductTierPriceAPIController@update');
Route::delete('admin/product_tier_prices{product_tier_prices}', 'Admin\ProductTierPriceAPIController@destroy');

Route::get('admin/product_transfers', 'Admin\ProductTransferAPIController@index');
Route::post('admin/product_transfers', 'Admin\ProductTransferAPIController@store');
Route::get('admin/product_transfers/{product_transfers}', 'Admin\ProductTransferAPIController@show');
Route::put('admin/product_transfers/{product_transfers}', 'Admin\ProductTransferAPIController@update');
Route::patch('admin/product_transfers/{product_transfers}', 'Admin\ProductTransferAPIController@update');
Route::delete('admin/product_transfers{product_transfers}', 'Admin\ProductTransferAPIController@destroy');

Route::get('admin/product_damageds', 'Admin\ProductDamagedAPIController@index');
Route::post('admin/product_damageds', 'Admin\ProductDamagedAPIController@store');
Route::get('admin/product_damageds/{product_damageds}', 'Admin\ProductDamagedAPIController@show');
Route::put('admin/product_damageds/{product_damageds}', 'Admin\ProductDamagedAPIController@update');
Route::patch('admin/product_damageds/{product_damageds}', 'Admin\ProductDamagedAPIController@update');
Route::delete('admin/product_damageds{product_damageds}', 'Admin\ProductDamagedAPIController@destroy');

Route::get('admin/purchases', 'Admin\PurchaseAPIController@index');
Route::post('admin/purchases', 'Admin\PurchaseAPIController@store');
Route::get('admin/purchases/{purchases}', 'Admin\PurchaseAPIController@show');
Route::put('admin/purchases/{purchases}', 'Admin\PurchaseAPIController@update');
Route::patch('admin/purchases/{purchases}', 'Admin\PurchaseAPIController@update');
Route::delete('admin/purchases{purchases}', 'Admin\PurchaseAPIController@destroy');

Route::get('admin/purchase_items', 'Admin\PurchaseItemAPIController@index');
Route::post('admin/purchase_items', 'Admin\PurchaseItemAPIController@store');
Route::get('admin/purchase_items/{purchase_items}', 'Admin\PurchaseItemAPIController@show');
Route::put('admin/purchase_items/{purchase_items}', 'Admin\PurchaseItemAPIController@update');
Route::patch('admin/purchase_items/{purchase_items}', 'Admin\PurchaseItemAPIController@update');
Route::delete('admin/purchase_items{purchase_items}', 'Admin\PurchaseItemAPIController@destroy');

Route::get('admin/suppliers', 'Admin\SupplierAPIController@index');
Route::post('admin/suppliers', 'Admin\SupplierAPIController@store');
Route::get('admin/suppliers/{suppliers}', 'Admin\SupplierAPIController@show');
Route::put('admin/suppliers/{suppliers}', 'Admin\SupplierAPIController@update');
Route::patch('admin/suppliers/{suppliers}', 'Admin\SupplierAPIController@update');
Route::delete('admin/suppliers{suppliers}', 'Admin\SupplierAPIController@destroy');

Route::get('admin/orders', 'Admin\OrderAPIController@index');
Route::post('admin/orders', 'Admin\OrderAPIController@store');
Route::get('admin/orders/{orders}', 'Admin\OrderAPIController@show');
Route::put('admin/orders/{orders}', 'Admin\OrderAPIController@update');
Route::patch('admin/orders/{orders}', 'Admin\OrderAPIController@update');
Route::delete('admin/orders{orders}', 'Admin\OrderAPIController@destroy');

Route::get('admin/order_items', 'Admin\OrderItemAPIController@index');
Route::post('admin/order_items', 'Admin\OrderItemAPIController@store');
Route::get('admin/order_items/{order_items}', 'Admin\OrderItemAPIController@show');
Route::put('admin/order_items/{order_items}', 'Admin\OrderItemAPIController@update');
Route::patch('admin/order_items/{order_items}', 'Admin\OrderItemAPIController@update');
Route::delete('admin/order_items{order_items}', 'Admin\OrderItemAPIController@destroy');

Route::get('admin/invoices', 'Admin\InvoiceAPIController@index');
Route::post('admin/invoices', 'Admin\InvoiceAPIController@store');
Route::get('admin/invoices/{invoices}', 'Admin\InvoiceAPIController@show');
Route::put('admin/invoices/{invoices}', 'Admin\InvoiceAPIController@update');
Route::patch('admin/invoices/{invoices}', 'Admin\InvoiceAPIController@update');
Route::delete('admin/invoices{invoices}', 'Admin\InvoiceAPIController@destroy');

Route::get('admin/transactions', 'Admin\TransactionAPIController@index');
Route::post('admin/transactions', 'Admin\TransactionAPIController@store');
Route::get('admin/transactions/{transactions}', 'Admin\TransactionAPIController@show');
Route::put('admin/transactions/{transactions}', 'Admin\TransactionAPIController@update');
Route::patch('admin/transactions/{transactions}', 'Admin\TransactionAPIController@update');
Route::delete('admin/transactions{transactions}', 'Admin\TransactionAPIController@destroy');