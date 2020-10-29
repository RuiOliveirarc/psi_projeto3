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


Route::get('/','App\Http\Controllers\FormController@entrada')->name('index');

Route::get('/onde','App\Http\Controllers\FormController@onde')->name('onde');

Route::get('/noticias','App\Http\Controllers\FormController@noticias')->name('noticias');

Route::get('/contacto','App\Http\Controllers\FormController@contacto')->name('contacto');

Route::get('/empresa','App\Http\Controllers\FormController@empresa')->name('empresa');

Route::get('contactos','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');

Route::post('contactos','App\Http\Controllers\FormController@processarForm')->name('processar.form');