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
/*Route::group(['middleware'=>'admin'], function () {
    Route::resource('products','ProductsController');
    Route::resource('categories','CategoriesController');
});*/

/*Route::group(['middleware'=>'Hoteles'], function () {
    Route::resource('hoteles','HotelesController');
});*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('hoteles','HotelesController');//,['only'=>['index']]);
Route::resource('aerolineas','AerolineasController');//,['only'=>['index']]);
Route::resource('clients','ClientsController');
Route::resource('reservations','ReservationsController');

Route::get('/main', 'MainController@main');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products','ProductsController',['only'=>['index']]);
Route::resource('addresses','AddressesController');
Route::resource('shopping_carts','ShoppingCartsController',['only'=>['store','destroy']]);
Route::resource('orders','OrdersController');
Route::resource('orderproducts','OrderProductsController',['only'=>['store']]);
