<?php

Route::get('/', 'indexController@index')->name('index');

Route::match(['get', 'post'], '/listBockHouse', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');
//Route::get('/creagte-post', 'indexController@createPost')->name('create-post');

Route::get('/create', 'CreatePostsController@create')->name('post.create');

Route::post('/create', 'CreatePostsController@store')->name('post.store');


Route::prefix('sign-in')->group(function () {

    Route::get('/', 'LoginController@signIn')->name('sign-in');

    Route::post('/dashboard', 'LoginController@login')->name('sign-store');

    Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');

    Route::post('/sign-up', 'LoginController@register')->name('sign-up');
});

Route::prefix('user')->group(function () {

    Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');

    Route::get('/editUsers/{id}', 'DashBoardController@editUser')->name('editUsers');

    Route::post('/editUser/{id}', 'DashBoardController@updateUser')->name('editUser');

    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');

    Route::post('forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

    Route::post('post}', 'DashBoardController@post')->name('post');
});

