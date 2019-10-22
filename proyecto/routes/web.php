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
Route::get( '/tienda/new' , 'TiendaController@create');
Route::get( '/empleado/new' , 'EmpleadoController@create');
Route::get( '/proveedor/new' , 'ProveedorController@create');
Route::post( '/tienda/save/' , 'TiendaController@store');
Route::post( '/empleado/save/' , 'EmpleadoController@store');
Route::post( '/proveedor/save/' , 'ProveedorController@store');
Route::get( '/tienda/edit' , 'TiendaController@edit');
Route::get( '/empleado/edit' , 'EmpleadoController@edit');
Route::get( '/proveedor/edit' , 'ProveedorController@edit');
Route::patch( '/tienda/{tienda}/update' , 'TiendaController@update');
Route::patch( '/empleado/{empleado}/update' , 'EmpleadoController@update');
Route::patch( '/proveedor/{proveedor}/update' , 'ProveedorController@update');
Route::delete( '/tienda/remove/{tienda}' , 'TiendaController@destroy');
Route::delete( '/empleado/remove/{empleado}' , 'EmpleadoController@destroy');
Route::delete( '/proveedor/remove/{proveedor}' , 'ProveedorController@destroy');
