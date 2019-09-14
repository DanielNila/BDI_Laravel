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


Route::get('test', function () {
 
   return  'Hola Mundo, Proyecto Base de Datos para Internet';

});
/*Route::get('/autobuses','AutobusesController@index');
Route::get('/autobuses/create','AutobusesController@create');*/
Route::resource('autobuses', 'AutobusesController');
