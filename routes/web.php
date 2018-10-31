<?php

Route::get('/', 'indexController@index')->name('index');

Route::get('/new', 'indexController@new')->name('new');

Route::get('/list-bock-house', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/show-updated-home-status/{id}', 'HousesController@showUpdatedHomeStatus')->name('showUpdatedHomeStatus');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');

Route::get('/sign-in', 'LoginController@signIn')->name('sign-in');

Route::post('/search', 'HousesController@search')->name('search');
// chưa có return về view nào sáng code

Route::post('/updated-home-status', 'HousesController@updatedHomeStatus')->name('updatedHomeStatus');

Route::get('/sign-in', 'LoginController@signIn')->name('sign-in');

Route::post('/dashboard', 'LoginController@login')->name('dashboard');

Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');
 
Route::post('/sign-up', 'LoginController@register')->name('sign-up');

Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');

Route::get('/user/edit-users/{id}', 'DashBoardController@editUser')->name('editUsers');

Route::post('/user/edit-user/{id}', 'DashBoardController@updateUser')->name('editUser');

Route::get('/user/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');

Route::post('/user/forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

Route::get('/calendar/{id}', 'UserController@showCalendar')->name('showCalendar');

Route::get('/create/{id}', 'CreatePostsController@create')->name('post.create');

Route::post('/create/{id}', 'CreatePostsController@store')->name('post.store');

Route::get('/new-post/{id}', 'CreatePostsController@showNewPost')->name('showNewPost');

Route::get('/seeDetails/{id}', 'HousesController@seeDetails')->name('seeDetails');

Route::get('/show-statistics/{id}', 'UserController@showStatistics')->name('showStatistics');

Route::post('/feedback/{id}', 'UserController@feedback')->name('feedback');