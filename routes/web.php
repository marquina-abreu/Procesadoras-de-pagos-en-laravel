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

Route::get('/Inicio','InicioController@index')->name('inicio');

Route::get('/Inicio/Producto','ProductoViewController@index')->name('infopro');

Route::get('/Inicio/Producto/Procesar','ComprarController@index')->name('comprarpro');
//stripe
Route::post('/Inicio/Producto/Procesarpago','ComprarController@process')->name('process_pay');
//mercadopago
Route::post('/Inicio/Producto/Procesarpagomp','ComprarController@processmp')->name('process_paymp');


