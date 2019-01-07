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

Route::get('/','PagesController@home')->name('home');
Route::get('/mayorista','PagesController@mayorista')->name('mayorista');
Route::get('/envios','PagesController@envios')->name('envios');
Route::get('/faq','PagesController@faq')->name('faq');
Route::get('/franquicias','PagesController@franquicias')->name('franquicias');
Route::get('/eventos','PagesController@eventos')->name('eventos');
Route::get('/publicitarios','PagesController@publicitarios')->name('publicitarios');
Route::get('/puntos-venta','PagesController@puntos_venta')->name('puntos-venta');
Route::get('/contacto','PagesController@contacto')->name('contacto');

Route::get('/profile','PagesController@profile')->name('profile')->middleware('auth');

Route::get('products/buscar','ProductsController@search')->name('search');
Route::resource('products','ProductsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('success');
