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


Route::resource('suppliers','SupplierController');
Route::resource('groups','GroupController');
Route::resource('units','UnitController');
Route::resource('products','ProductController');


Route::resource('recipes','RecipeController');
Route::resource('recipes.products', 'ProductRecipeController');




Route::get('/sign-out', function () {
    Auth::logout();
    return Redirect::route('login');
})->name('sign-out');
