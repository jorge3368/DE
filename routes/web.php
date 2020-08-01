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
Route::resource('empresa', 'EmpresaController', ['except' => ['destroy']]);
Route::put('empresa/del/{empresa}', 'EmpresaController@destroy')->name('empresa.destroy');
Route::get('empresas', function(){
	return view('empresas.index');
});

Route::resource('empleado', 'EmpleadoController', ['except' => ['destroy']]);
Route::put('empleado/del/{empleado}', 'EmpleadoController@destroy')->name('empleado.destroy');
Route::get('empleados', function(){
	return view('empleados.index');
});

Route::get('/', function () {
    return view('welcome');
});
