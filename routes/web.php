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



Route::match(['get', 'post'], '/', 'ContactController@index');
Route::match(['get', 'post'], '/contact', 'ContactController@contact');
Route::match(['get', 'post'], '/contact1', 'ContactController@contact1');
Route::match(['get', 'post'], '/test', 'ContactController@send');

