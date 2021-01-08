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

Route::get('/', function () {
    return view('layouts.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* bloque de acceso a paginas de visita libre */
Route::get('php', 'InModelController@php');	
Route::get('python', 'InModelController@python');	
Route::get('cisco', 'InModelController@cisco');	
Route::get('ingles', 'InModelController@ingles');	
Route::get('linux', 'InModelController@linux');	
Route::get('jscript', 'InModelController@jscript');	
