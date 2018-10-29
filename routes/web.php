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


Route::get('/', 'indexController@index')->name('index');

Route::get('/new', 'indexController@new')->name('new');

Route::get('/listBockHouse', 'indexController@listBockHouse')->name('listBockHouse');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');

Route::get('/create-post', 'indexController@createPost')->name('create-post');

Route::get('/sign-in', 'LoginController@signIn')->name('sign-in');

Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');
