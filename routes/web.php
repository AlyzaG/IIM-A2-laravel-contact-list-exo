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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/contacts', 'ContactController');


Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::get('/contacts', 'ContactController@index')->name('contacts.update');
Route::get('/contacts', 'ContactController@index')->name('contacts.create');


