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

Auth::routes();
Route::get('/cms', 'HomeController@index')->name('dashboard');
Route::get('/module/{slug}', 'HomeController@module')->name('module');
Route::get('/create/{slug}', 'HomeController@create')->name('create');
Route::post('/store/{slug}', 'HomeController@store')->name('store');
Route::get('/edit/{slug}/{id}', 'HomeController@edit')->name('edit');
Route::post('/update/{slug}/{id}', 'HomeController@update')->name('update');
Route::get('/delete/{slug}/{id}', 'HomeController@destroy')->name('delete');

Route::get('/{slug}', 'FrontendController@page')->name('page');
