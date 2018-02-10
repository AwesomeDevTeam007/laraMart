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

Route::get('admin/categories', ['as'=> 'admin.categories.index', 'uses' => 'Admin\CategoryController@index']);
Route::post('admin/categories', ['as'=> 'admin.categories.store', 'uses' => 'Admin\CategoryController@store']);
Route::get('admin/categories/create', ['as'=> 'admin.categories.create', 'uses' => 'Admin\CategoryController@create']);
Route::put('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
Route::patch('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
Route::delete('admin/categories/{categories}', ['as'=> 'admin.categories.destroy', 'uses' => 'Admin\CategoryController@destroy']);
Route::get('admin/categories/{categories}', ['as'=> 'admin.categories.show', 'uses' => 'Admin\CategoryController@show']);
Route::get('admin/categories/{categories}/edit', ['as'=> 'admin.categories.edit', 'uses' => 'Admin\CategoryController@edit']);


Route::get('admin/branches', ['as'=> 'admin.branches.index', 'uses' => 'Admin\BranchController@index']);
Route::post('admin/branches', ['as'=> 'admin.branches.store', 'uses' => 'Admin\BranchController@store']);
Route::get('admin/branches/create', ['as'=> 'admin.branches.create', 'uses' => 'Admin\BranchController@create']);
Route::put('admin/branches/{branches}', ['as'=> 'admin.branches.update', 'uses' => 'Admin\BranchController@update']);
Route::patch('admin/branches/{branches}', ['as'=> 'admin.branches.update', 'uses' => 'Admin\BranchController@update']);
Route::delete('admin/branches/{branches}', ['as'=> 'admin.branches.destroy', 'uses' => 'Admin\BranchController@destroy']);
Route::get('admin/branches/{branches}', ['as'=> 'admin.branches.show', 'uses' => 'Admin\BranchController@show']);
Route::get('admin/branches/{branches}/edit', ['as'=> 'admin.branches.edit', 'uses' => 'Admin\BranchController@edit']);


Route::get('admin/locations', ['as'=> 'admin.locations.index', 'uses' => 'Admin\LocationController@index']);
Route::post('admin/locations', ['as'=> 'admin.locations.store', 'uses' => 'Admin\LocationController@store']);
Route::get('admin/locations/create', ['as'=> 'admin.locations.create', 'uses' => 'Admin\LocationController@create']);
Route::put('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
Route::patch('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
Route::delete('admin/locations/{locations}', ['as'=> 'admin.locations.destroy', 'uses' => 'Admin\LocationController@destroy']);
Route::get('admin/locations/{locations}', ['as'=> 'admin.locations.show', 'uses' => 'Admin\LocationController@show']);
Route::get('admin/locations/{locations}/edit', ['as'=> 'admin.locations.edit', 'uses' => 'Admin\LocationController@edit']);


Route::get('admin/products', ['as'=> 'admin.products.index', 'uses' => 'Admin\ProductController@index']);
Route::post('admin/products', ['as'=> 'admin.products.store', 'uses' => 'Admin\ProductController@store']);
Route::get('admin/products/create', ['as'=> 'admin.products.create', 'uses' => 'Admin\ProductController@create']);
Route::put('admin/products/{products}', ['as'=> 'admin.products.update', 'uses' => 'Admin\ProductController@update']);
Route::patch('admin/products/{products}', ['as'=> 'admin.products.update', 'uses' => 'Admin\ProductController@update']);
Route::delete('admin/products/{products}', ['as'=> 'admin.products.destroy', 'uses' => 'Admin\ProductController@destroy']);
Route::get('admin/products/{products}', ['as'=> 'admin.products.show', 'uses' => 'Admin\ProductController@show']);
Route::get('admin/products/{products}/edit', ['as'=> 'admin.products.edit', 'uses' => 'Admin\ProductController@edit']);


Route::get('admin/productImages', ['as'=> 'admin.productImages.index', 'uses' => 'Admin\ProductImageController@index']);
Route::post('admin/productImages', ['as'=> 'admin.productImages.store', 'uses' => 'Admin\ProductImageController@store']);
Route::get('admin/productImages/create', ['as'=> 'admin.productImages.create', 'uses' => 'Admin\ProductImageController@create']);
Route::put('admin/productImages/{productImages}', ['as'=> 'admin.productImages.update', 'uses' => 'Admin\ProductImageController@update']);
Route::patch('admin/productImages/{productImages}', ['as'=> 'admin.productImages.update', 'uses' => 'Admin\ProductImageController@update']);
Route::delete('admin/productImages/{productImages}', ['as'=> 'admin.productImages.destroy', 'uses' => 'Admin\ProductImageController@destroy']);
Route::get('admin/productImages/{productImages}', ['as'=> 'admin.productImages.show', 'uses' => 'Admin\ProductImageController@show']);
Route::get('admin/productImages/{productImages}/edit', ['as'=> 'admin.productImages.edit', 'uses' => 'Admin\ProductImageController@edit']);


Route::get('admin/productAttributes', ['as'=> 'admin.productAttributes.index', 'uses' => 'Admin\ProductAttributeController@index']);
Route::post('admin/productAttributes', ['as'=> 'admin.productAttributes.store', 'uses' => 'Admin\ProductAttributeController@store']);
Route::get('admin/productAttributes/create', ['as'=> 'admin.productAttributes.create', 'uses' => 'Admin\ProductAttributeController@create']);
Route::put('admin/productAttributes/{productAttributes}', ['as'=> 'admin.productAttributes.update', 'uses' => 'Admin\ProductAttributeController@update']);
Route::patch('admin/productAttributes/{productAttributes}', ['as'=> 'admin.productAttributes.update', 'uses' => 'Admin\ProductAttributeController@update']);
Route::delete('admin/productAttributes/{productAttributes}', ['as'=> 'admin.productAttributes.destroy', 'uses' => 'Admin\ProductAttributeController@destroy']);
Route::get('admin/productAttributes/{productAttributes}', ['as'=> 'admin.productAttributes.show', 'uses' => 'Admin\ProductAttributeController@show']);
Route::get('admin/productAttributes/{productAttributes}/edit', ['as'=> 'admin.productAttributes.edit', 'uses' => 'Admin\ProductAttributeController@edit']);


Route::get('admin/productInventories', ['as'=> 'admin.productInventories.index', 'uses' => 'Admin\ProductInventoryController@index']);
Route::post('admin/productInventories', ['as'=> 'admin.productInventories.store', 'uses' => 'Admin\ProductInventoryController@store']);
Route::get('admin/productInventories/create', ['as'=> 'admin.productInventories.create', 'uses' => 'Admin\ProductInventoryController@create']);
Route::put('admin/productInventories/{productInventories}', ['as'=> 'admin.productInventories.update', 'uses' => 'Admin\ProductInventoryController@update']);
Route::patch('admin/productInventories/{productInventories}', ['as'=> 'admin.productInventories.update', 'uses' => 'Admin\ProductInventoryController@update']);
Route::delete('admin/productInventories/{productInventories}', ['as'=> 'admin.productInventories.destroy', 'uses' => 'Admin\ProductInventoryController@destroy']);
Route::get('admin/productInventories/{productInventories}', ['as'=> 'admin.productInventories.show', 'uses' => 'Admin\ProductInventoryController@show']);
Route::get('admin/productInventories/{productInventories}/edit', ['as'=> 'admin.productInventories.edit', 'uses' => 'Admin\ProductInventoryController@edit']);


Route::get('admin/productPrices', ['as'=> 'admin.productPrices.index', 'uses' => 'Admin\ProductPriceController@index']);
Route::post('admin/productPrices', ['as'=> 'admin.productPrices.store', 'uses' => 'Admin\ProductPriceController@store']);
Route::get('admin/productPrices/create', ['as'=> 'admin.productPrices.create', 'uses' => 'Admin\ProductPriceController@create']);
Route::put('admin/productPrices/{productPrices}', ['as'=> 'admin.productPrices.update', 'uses' => 'Admin\ProductPriceController@update']);
Route::patch('admin/productPrices/{productPrices}', ['as'=> 'admin.productPrices.update', 'uses' => 'Admin\ProductPriceController@update']);
Route::delete('admin/productPrices/{productPrices}', ['as'=> 'admin.productPrices.destroy', 'uses' => 'Admin\ProductPriceController@destroy']);
Route::get('admin/productPrices/{productPrices}', ['as'=> 'admin.productPrices.show', 'uses' => 'Admin\ProductPriceController@show']);
Route::get('admin/productPrices/{productPrices}/edit', ['as'=> 'admin.productPrices.edit', 'uses' => 'Admin\ProductPriceController@edit']);


Route::get('admin/productOffers', ['as'=> 'admin.productOffers.index', 'uses' => 'Admin\ProductOfferController@index']);
Route::post('admin/productOffers', ['as'=> 'admin.productOffers.store', 'uses' => 'Admin\ProductOfferController@store']);
Route::get('admin/productOffers/create', ['as'=> 'admin.productOffers.create', 'uses' => 'Admin\ProductOfferController@create']);
Route::put('admin/productOffers/{productOffers}', ['as'=> 'admin.productOffers.update', 'uses' => 'Admin\ProductOfferController@update']);
Route::patch('admin/productOffers/{productOffers}', ['as'=> 'admin.productOffers.update', 'uses' => 'Admin\ProductOfferController@update']);
Route::delete('admin/productOffers/{productOffers}', ['as'=> 'admin.productOffers.destroy', 'uses' => 'Admin\ProductOfferController@destroy']);
Route::get('admin/productOffers/{productOffers}', ['as'=> 'admin.productOffers.show', 'uses' => 'Admin\ProductOfferController@show']);
Route::get('admin/productOffers/{productOffers}/edit', ['as'=> 'admin.productOffers.edit', 'uses' => 'Admin\ProductOfferController@edit']);


Route::get('admin/productTierPrices', ['as'=> 'admin.productTierPrices.index', 'uses' => 'Admin\ProductTierPriceController@index']);
Route::post('admin/productTierPrices', ['as'=> 'admin.productTierPrices.store', 'uses' => 'Admin\ProductTierPriceController@store']);
Route::get('admin/productTierPrices/create', ['as'=> 'admin.productTierPrices.create', 'uses' => 'Admin\ProductTierPriceController@create']);
Route::put('admin/productTierPrices/{productTierPrices}', ['as'=> 'admin.productTierPrices.update', 'uses' => 'Admin\ProductTierPriceController@update']);
Route::patch('admin/productTierPrices/{productTierPrices}', ['as'=> 'admin.productTierPrices.update', 'uses' => 'Admin\ProductTierPriceController@update']);
Route::delete('admin/productTierPrices/{productTierPrices}', ['as'=> 'admin.productTierPrices.destroy', 'uses' => 'Admin\ProductTierPriceController@destroy']);
Route::get('admin/productTierPrices/{productTierPrices}', ['as'=> 'admin.productTierPrices.show', 'uses' => 'Admin\ProductTierPriceController@show']);
Route::get('admin/productTierPrices/{productTierPrices}/edit', ['as'=> 'admin.productTierPrices.edit', 'uses' => 'Admin\ProductTierPriceController@edit']);


Route::get('admin/productTransfers', ['as'=> 'admin.productTransfers.index', 'uses' => 'Admin\ProductTransferController@index']);
Route::post('admin/productTransfers', ['as'=> 'admin.productTransfers.store', 'uses' => 'Admin\ProductTransferController@store']);
Route::get('admin/productTransfers/create', ['as'=> 'admin.productTransfers.create', 'uses' => 'Admin\ProductTransferController@create']);
Route::put('admin/productTransfers/{productTransfers}', ['as'=> 'admin.productTransfers.update', 'uses' => 'Admin\ProductTransferController@update']);
Route::patch('admin/productTransfers/{productTransfers}', ['as'=> 'admin.productTransfers.update', 'uses' => 'Admin\ProductTransferController@update']);
Route::delete('admin/productTransfers/{productTransfers}', ['as'=> 'admin.productTransfers.destroy', 'uses' => 'Admin\ProductTransferController@destroy']);
Route::get('admin/productTransfers/{productTransfers}', ['as'=> 'admin.productTransfers.show', 'uses' => 'Admin\ProductTransferController@show']);
Route::get('admin/productTransfers/{productTransfers}/edit', ['as'=> 'admin.productTransfers.edit', 'uses' => 'Admin\ProductTransferController@edit']);


Route::get('admin/productDamageds', ['as'=> 'admin.productDamageds.index', 'uses' => 'Admin\ProductDamagedController@index']);
Route::post('admin/productDamageds', ['as'=> 'admin.productDamageds.store', 'uses' => 'Admin\ProductDamagedController@store']);
Route::get('admin/productDamageds/create', ['as'=> 'admin.productDamageds.create', 'uses' => 'Admin\ProductDamagedController@create']);
Route::put('admin/productDamageds/{productDamageds}', ['as'=> 'admin.productDamageds.update', 'uses' => 'Admin\ProductDamagedController@update']);
Route::patch('admin/productDamageds/{productDamageds}', ['as'=> 'admin.productDamageds.update', 'uses' => 'Admin\ProductDamagedController@update']);
Route::delete('admin/productDamageds/{productDamageds}', ['as'=> 'admin.productDamageds.destroy', 'uses' => 'Admin\ProductDamagedController@destroy']);
Route::get('admin/productDamageds/{productDamageds}', ['as'=> 'admin.productDamageds.show', 'uses' => 'Admin\ProductDamagedController@show']);
Route::get('admin/productDamageds/{productDamageds}/edit', ['as'=> 'admin.productDamageds.edit', 'uses' => 'Admin\ProductDamagedController@edit']);


Route::get('admin/purchases', ['as'=> 'admin.purchases.index', 'uses' => 'Admin\PurchaseController@index']);
Route::post('admin/purchases', ['as'=> 'admin.purchases.store', 'uses' => 'Admin\PurchaseController@store']);
Route::get('admin/purchases/create', ['as'=> 'admin.purchases.create', 'uses' => 'Admin\PurchaseController@create']);
Route::put('admin/purchases/{purchases}', ['as'=> 'admin.purchases.update', 'uses' => 'Admin\PurchaseController@update']);
Route::patch('admin/purchases/{purchases}', ['as'=> 'admin.purchases.update', 'uses' => 'Admin\PurchaseController@update']);
Route::delete('admin/purchases/{purchases}', ['as'=> 'admin.purchases.destroy', 'uses' => 'Admin\PurchaseController@destroy']);
Route::get('admin/purchases/{purchases}', ['as'=> 'admin.purchases.show', 'uses' => 'Admin\PurchaseController@show']);
Route::get('admin/purchases/{purchases}/edit', ['as'=> 'admin.purchases.edit', 'uses' => 'Admin\PurchaseController@edit']);


Route::get('admin/purchaseItems', ['as'=> 'admin.purchaseItems.index', 'uses' => 'Admin\PurchaseItemController@index']);
Route::post('admin/purchaseItems', ['as'=> 'admin.purchaseItems.store', 'uses' => 'Admin\PurchaseItemController@store']);
Route::get('admin/purchaseItems/create', ['as'=> 'admin.purchaseItems.create', 'uses' => 'Admin\PurchaseItemController@create']);
Route::put('admin/purchaseItems/{purchaseItems}', ['as'=> 'admin.purchaseItems.update', 'uses' => 'Admin\PurchaseItemController@update']);
Route::patch('admin/purchaseItems/{purchaseItems}', ['as'=> 'admin.purchaseItems.update', 'uses' => 'Admin\PurchaseItemController@update']);
Route::delete('admin/purchaseItems/{purchaseItems}', ['as'=> 'admin.purchaseItems.destroy', 'uses' => 'Admin\PurchaseItemController@destroy']);
Route::get('admin/purchaseItems/{purchaseItems}', ['as'=> 'admin.purchaseItems.show', 'uses' => 'Admin\PurchaseItemController@show']);
Route::get('admin/purchaseItems/{purchaseItems}/edit', ['as'=> 'admin.purchaseItems.edit', 'uses' => 'Admin\PurchaseItemController@edit']);


Route::get('admin/suppliers', ['as'=> 'admin.suppliers.index', 'uses' => 'Admin\SupplierController@index']);
Route::post('admin/suppliers', ['as'=> 'admin.suppliers.store', 'uses' => 'Admin\SupplierController@store']);
Route::get('admin/suppliers/create', ['as'=> 'admin.suppliers.create', 'uses' => 'Admin\SupplierController@create']);
Route::put('admin/suppliers/{suppliers}', ['as'=> 'admin.suppliers.update', 'uses' => 'Admin\SupplierController@update']);
Route::patch('admin/suppliers/{suppliers}', ['as'=> 'admin.suppliers.update', 'uses' => 'Admin\SupplierController@update']);
Route::delete('admin/suppliers/{suppliers}', ['as'=> 'admin.suppliers.destroy', 'uses' => 'Admin\SupplierController@destroy']);
Route::get('admin/suppliers/{suppliers}', ['as'=> 'admin.suppliers.show', 'uses' => 'Admin\SupplierController@show']);
Route::get('admin/suppliers/{suppliers}/edit', ['as'=> 'admin.suppliers.edit', 'uses' => 'Admin\SupplierController@edit']);


Route::get('admin/orders', ['as'=> 'admin.orders.index', 'uses' => 'Admin\OrderController@index']);
Route::post('admin/orders', ['as'=> 'admin.orders.store', 'uses' => 'Admin\OrderController@store']);
Route::get('admin/orders/create', ['as'=> 'admin.orders.create', 'uses' => 'Admin\OrderController@create']);
Route::put('admin/orders/{orders}', ['as'=> 'admin.orders.update', 'uses' => 'Admin\OrderController@update']);
Route::patch('admin/orders/{orders}', ['as'=> 'admin.orders.update', 'uses' => 'Admin\OrderController@update']);
Route::delete('admin/orders/{orders}', ['as'=> 'admin.orders.destroy', 'uses' => 'Admin\OrderController@destroy']);
Route::get('admin/orders/{orders}', ['as'=> 'admin.orders.show', 'uses' => 'Admin\OrderController@show']);
Route::get('admin/orders/{orders}/edit', ['as'=> 'admin.orders.edit', 'uses' => 'Admin\OrderController@edit']);


Route::get('admin/orderItems', ['as'=> 'admin.orderItems.index', 'uses' => 'Admin\OrderItemController@index']);
Route::post('admin/orderItems', ['as'=> 'admin.orderItems.store', 'uses' => 'Admin\OrderItemController@store']);
Route::get('admin/orderItems/create', ['as'=> 'admin.orderItems.create', 'uses' => 'Admin\OrderItemController@create']);
Route::put('admin/orderItems/{orderItems}', ['as'=> 'admin.orderItems.update', 'uses' => 'Admin\OrderItemController@update']);
Route::patch('admin/orderItems/{orderItems}', ['as'=> 'admin.orderItems.update', 'uses' => 'Admin\OrderItemController@update']);
Route::delete('admin/orderItems/{orderItems}', ['as'=> 'admin.orderItems.destroy', 'uses' => 'Admin\OrderItemController@destroy']);
Route::get('admin/orderItems/{orderItems}', ['as'=> 'admin.orderItems.show', 'uses' => 'Admin\OrderItemController@show']);
Route::get('admin/orderItems/{orderItems}/edit', ['as'=> 'admin.orderItems.edit', 'uses' => 'Admin\OrderItemController@edit']);


Route::get('admin/invoices', ['as'=> 'admin.invoices.index', 'uses' => 'Admin\InvoiceController@index']);
Route::post('admin/invoices', ['as'=> 'admin.invoices.store', 'uses' => 'Admin\InvoiceController@store']);
Route::get('admin/invoices/create', ['as'=> 'admin.invoices.create', 'uses' => 'Admin\InvoiceController@create']);
Route::put('admin/invoices/{invoices}', ['as'=> 'admin.invoices.update', 'uses' => 'Admin\InvoiceController@update']);
Route::patch('admin/invoices/{invoices}', ['as'=> 'admin.invoices.update', 'uses' => 'Admin\InvoiceController@update']);
Route::delete('admin/invoices/{invoices}', ['as'=> 'admin.invoices.destroy', 'uses' => 'Admin\InvoiceController@destroy']);
Route::get('admin/invoices/{invoices}', ['as'=> 'admin.invoices.show', 'uses' => 'Admin\InvoiceController@show']);
Route::get('admin/invoices/{invoices}/edit', ['as'=> 'admin.invoices.edit', 'uses' => 'Admin\InvoiceController@edit']);


Route::get('admin/transactions', ['as'=> 'admin.transactions.index', 'uses' => 'Admin\TransactionController@index']);
Route::post('admin/transactions', ['as'=> 'admin.transactions.store', 'uses' => 'Admin\TransactionController@store']);
Route::get('admin/transactions/create', ['as'=> 'admin.transactions.create', 'uses' => 'Admin\TransactionController@create']);
Route::put('admin/transactions/{transactions}', ['as'=> 'admin.transactions.update', 'uses' => 'Admin\TransactionController@update']);
Route::patch('admin/transactions/{transactions}', ['as'=> 'admin.transactions.update', 'uses' => 'Admin\TransactionController@update']);
Route::delete('admin/transactions/{transactions}', ['as'=> 'admin.transactions.destroy', 'uses' => 'Admin\TransactionController@destroy']);
Route::get('admin/transactions/{transactions}', ['as'=> 'admin.transactions.show', 'uses' => 'Admin\TransactionController@show']);
Route::get('admin/transactions/{transactions}/edit', ['as'=> 'admin.transactions.edit', 'uses' => 'Admin\TransactionController@edit']);
