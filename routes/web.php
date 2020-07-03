<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/busqueda', 'BusquedaController@index')->name('busqueda.index');
    Route::get('/cart', 'CarritoController@index')->name('carrito.index');

    /*Route::get('/proveedores', 'ProveedorController@index')->name('proveedor.index');
    Route::get('/proveedor/alta', 'ProveedorController@create')->name('proveedor.create');*/

    Route::resource('proveedor', 'ProveedorController');
    Route::resource('producto', 'ProductoController');

    Route::get('/cart/{id}/{criterio}', 'CarritoController@create')->name('carrito.create');
    Route::post('/cart/{id}', 'CarritoController@destroy')->name('carrito.destroy');
    });

/*
Route::get('nuevo', function () {
    return view('nuevo');
});

Route::get('cart', function () {
    return view('cart');
});*/

Auth::routes();


