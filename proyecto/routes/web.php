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

Route::get('/home', 'HomeController@index')->name('home');

Route::get( '/tienda' , 'TiendaController@index');
Route::get( '/empleado' , 'EmpleadoController@index');
Route::get( '/proveedor' , 'ProveedorController@index');
Route::get( '/producto' , 'ProductoController@index');
Route::get( '/serie' , 'SerieController@index');
Route::get( '/tienda/new' , 'TiendaController@create');
Route::get( '/empleado/new' , 'EmpleadoController@create');
Route::get( '/proveedor/new' , 'ProveedorController@create');
Route::get( '/producto/new' , 'ProductoController@create');
Route::get( '/serie/new' , 'SerieController@create');
Route::post( '/tienda/save/' , 'TiendaController@store');
Route::post( '/empleado/save/' , 'EmpleadoController@store');
Route::post( '/proveedor/save/' , 'ProveedorController@store');
Route::post( '/producto/save/' , 'ProductoController@store');
Route::post( '/serie/save/' , 'SerieController@store');
Route::get( '/tienda/edit' , 'TiendaController@edit');
Route::get( '/empleado/edit' , 'EmpleadoController@edit');
Route::get( '/proveedor/edit' , 'ProveedorController@edit');
Route::get( '/producto/edit' , 'ProductoController@edit');
Route::get( '/serie/edit' , 'SerieController@edit');
Route::patch( '/tienda/{tienda}/update' , 'TiendaController@update');
Route::patch( '/empleado/{empleado}/update' , 'EmpleadoController@update');
Route::patch( '/proveedor/{proveedor}/update' , 'ProveedorController@update');
Route::patch( '/producto/{producto}/update' , 'ProductoController@update');
Route::patch( '/serie/{serie}/update' , 'SerieController@update');
Route::delete( '/tienda/remove/{tienda}' , 'TiendaController@destroy');
Route::delete( '/empleado/remove/{empleado}' , 'EmpleadoController@destroy');
Route::delete( '/proveedor/remove/{proveedor}' , 'ProveedorController@destroy');
Route::delete( '/producto/remove/{producto}' , 'ProductoController@destroy');
Route::delete( '/serie/remove/{serie}' , 'SerieController@destroy');
