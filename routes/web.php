<?php

Route::get('/', 'indexController@index')->name('index');

Route::get('/new', 'indexController@new')->name('new');

Route::get('/listBockHouse', 'indexController@listBockHouse')->name('listBockHouse');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');

Route::get('/create-post', 'indexController@createPost')->name('create-post');



Route::get('/sign-in', 'LoginController@signIn')->name('sign-in');
Route::post('/dashboard', 'LoginController@login')->name('sign-in');
Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');
Route::post('/sign-up', 'LoginController@register')->name('sign-up');

Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');

Route::get('/user/editUsers/{id}', 'DashBoardController@editUser')->name('editUsers');
Route::post('/user/editUser/{id}', 'DashBoardController@updateUser')->name('editUser');
Route::get('/user/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');
Route::post('/user/forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

