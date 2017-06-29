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

Route::get('/', 'TechniqueController@index')->name('homepage');

Route::group(['middleware' => 'auth', 'prefix' => 'admin/'], function () {

    Route::get('/create', 'TechniqueController@create')->name('create');
    Route::get('/store', 'TechniqueController@store')->name('store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
