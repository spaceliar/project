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

Route::prefix('')
    ->group(base_path('routes/Frontend/Frontend.php'));

Auth::routes();

Route::prefix('admin')
    ->group(base_path('routes/Backend/Backend.php'));