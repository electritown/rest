<?php

use TCG\Voyager\Facades\Voyager;
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

Route::resource('ingredients', 'IngredientsController');
Route::resource('meals', 'MealsController');
Route::resource('users', 'UserController');
Route::resource('categories', 'CategoriesController');
Route::resource('cart', 'CartsController');
Route::resource('table','TablesController');
Route::resource('people','PeoplesController');
Route::resource('orders','OrdersController');


Route::get('/f',function(){
    return view('test');

});

Route::get('/generate-pdf','HomeController@generatePDF');

// Ingredients Categories redirects
Route::resource('ingCategories', 'IngCategoriesController');
Route::get('/MealsController/findCat/{id}','MealsController@findCat');
Route::get('/MealsController/findSupCat/{id}','MealsController@findSupCat');

