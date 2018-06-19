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

Route::get('/Home','HomeController@index')->name('home');

Route::get('/Home/Producto','ProductoViewController@index')->name('infopro');

Route::get('/Home/Producto/Procesar','ComprarController@index')->name('comprarpro');
//stripe
Route::post('/Home/Producto/Procesarpago','ComprarController@process')->name('process_pay');
//mercadopago
Route::post('/Home/Producto/Procesarpagomp','ComprarController@processmp')->name('process_paymp');


