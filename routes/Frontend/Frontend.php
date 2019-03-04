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
Route::get('/', 'FrontendController@index')->name('index');
Route::prefix('category')->group(function(){
<<<<<<< HEAD
Route::get('/','CategoryController@index')->name('product');
=======
	Route::get('/','CategoryController@index')->name('product');
	Route::post('/','CategoryController@getItem')->name('getItem');
>>>>>>> a46f2b6f68b29fe5cd8364e326f0ad209fa2f5d0
});

