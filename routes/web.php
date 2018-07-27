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
Route::get('/orders', 'PagesController@orders');

Route::resource('ingredients', 'IngredientsController');
Route::resource('meals', 'MealsController');
Route::resource('users', 'UserController');
Route::resource('categories', 'CategoriesController');
Route::resource('cart', 'CartsController');
Route::resource('reservation', 'ReservationsController');
Route::get('/f',function(){
    return Voyager::view('voyager::test');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/generate-pdf','HomeController@generatePDF');
Route::get('/CategoriesController/findCategory/{id}', 'CategoriesController@findCategory');


