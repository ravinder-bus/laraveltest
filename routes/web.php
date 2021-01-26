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
    return view('login');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/product', 'productController@productList')->name('product');
Route::post('/add-to-cart', 'productController@addtocart')->name('addtocart');
Route::get('/cart', 'productController@cart')->name('cart');
Route::get('/admin', 'Auth\LoginController@admin')->name('admin');
Route::get('/product-description/{id}', 'productController@description')->name('admin');

//Route::get('/home', 'HomeController@index')->name('home');
