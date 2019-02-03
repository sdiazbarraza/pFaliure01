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

Route::get('/dashboard', function () {
    return view('views/dashboard');
})->name('dashboard');


Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/clients', 'ClientController@index')->name('clients.index');

Route::get('/receivers', 'ReceiverController@index')->name('receivers.index');

Route::get('/providers', 'ProviderController@index')->name('providers.index');

Route::get('/shippings', 'ShippingController@index')->name('shippings.index');

Route::get('/dispatch_orders', 'DispatchOrderController@index')->name('dispatch_orders.index');
