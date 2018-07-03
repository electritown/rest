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

Route::get('/', 'PagesController@index');
Route::get('/orders', 'PagesController@orders');

Route::resource('ingredients', 'IngredientsController');
Route::resource('menu', 'MenuController');
Route::get('/menu/createcat', 'MenuController@createcat');


