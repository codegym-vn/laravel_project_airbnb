<?php

Route::get('/', 'indexController@index')->name('index');


Route::match(['get', 'post'], '/listBockHouse', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/new', 'indexController@new')->name('new');

Route::get('/list-bock-house', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/show-updated-home-status/{id}', 'HousesController@showUpdatedHomeStatus')->name('showUpdatedHomeStatus');


Route::get('/information-house', 'indexController@informationHouse')->name('information-house');
//Route::get('/creagte-post', 'indexController@createPost')->name('create-post');

Route::get('/create', 'CreatePostsController@create')->name('post.create');


Route::post('/create', 'CreatePostsController@store')->name('post.store');

Route::get('/sign-in', 'LoginController@signIn')->name('sign-in');


Route::post('/search', 'HousesController@search')->name('search');
// chưa có return về view nào sáng code


Route::prefix('sign-in')->group(function () {

    Route::get('/', 'LoginController@signIn')->name('sign-in');

    Route::post('/dashboard', 'LoginController@login')->name('sign-store');

    Route::post('/updated-home-status', 'HousesController@updatedHomeStatus')->name('updatedHomeStatus');

    Route::post('/dashboard', 'LoginController@login')->name('dashboard');

    Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');

    Route::post('/sign-up', 'LoginController@register')->name('sign-up');

});

Route::prefix('user')->group(function () {

    Route::get('/calendar/{id}', 'UserController@showCalendar')->name('showCalendar');

    Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');

    Route::get('/editUsers/{id}', 'DashBoardController@editUser')->name('editUsers');

    Route::post('/editUser/{id}', 'DashBoardController@updateUser')->name('editUser');

    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');

    Route::post('forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

    Route::post('post}', 'DashBoardController@post')->name('post');
});


Route::post('/create', 'CreatePostsController@store')->name('post.store');

Route::get('/seeDetails/{id}', 'HousesController@seeDetails')->name('seeDetails');

Route::get('/show-statistics/{id}', 'UserController@showStatistics')->name('showStatistics');
