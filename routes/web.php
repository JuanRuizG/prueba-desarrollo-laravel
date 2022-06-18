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

Route::redirect('/', 'productos');

Route::get('ventas/peticion','VentaController@petition')->name('ventas.petition');
Route::post('ventas/peticion','VentaController@petitionProcess')->name('ventas.petition.process');

Route::resource('productos', 'ProductoController');
Route::resource('ventas', 'VentaController');

