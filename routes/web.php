<?php

Route::get('/', 'indexController@index')->name('index');
Route::get('/list-bock-house', 'HousesController@showHouses')->name('listBockHouse');
Route::get('/show-updated-home-status/{id}', 'HousesController@showUpdatedHomeStatus')->name('showUpdatedHomeStatus');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');
Route::post('/search', 'HousesController@search')->name('search');
Route::post('/updated-home-status', 'HousesController@updatedHomeStatus')->name('updatedHomeStatus');


Route::prefix('sign-in')->group(function () {
    Route::get('/', 'LoginController@signIn')->name('sign-in');
    Route::post('/dashboard', 'LoginController@login')->name('dashboard');
    Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');
    Route::post('/sign-up', 'LoginController@register')->name('sign-up');
    Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');
});


Route::prefix('userBockHouse')->group(function () {
    Route::get('/edit-users/{id}', 'DashBoardController@editUserPostHouse')->name('editUsers');
    Route::post('/edit-userPostHouse/{id}', 'DashBoardController@updateUserPostHouse')->name('editUser');
    Route::get('/edit-users/{id}', 'DashBoardController@editUserBockHouse')->name('editUserBockHouses');
    Route::post('/edit-userBockHouse/{id}', 'DashBoardController@updateUserBockHouse')->name('editUserBockHouse');

    Route::get('/bockhoue', 'UserController@viewCanlendar')->name('viewCanlendar');
    Route::get('/bockhoue/{id}', 'UserController@calendar')->name('bockhoue');

});
Route::prefix('userPostHouse')->group(function () {
    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');
    Route::post('/forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');
    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassBockHouse')->name('forgot-passBockHouse');
    Route::post('/forgot-password/{id}', 'DashBoardController@forgotPassBockHouse')->name('forgot-passwordBockHouse');
});


Route::get('/calendar/{id}', 'UserController@showCalendar')->name('showCalendar');

Route::get('/create', 'CreatePostsController@create')->name('post.create');

Route::post('/create', 'CreatePostsController@store')->name('post.store');

Route::get('/seeDetails/{id}', 'HousesController@seeDetails')->name('seeDetails');

Route::get('/show-statistics/{id}', 'UserController@showStatistics')->name('showStatistics');

Route::post('/feedback/{id}', 'UserController@feedback')->name('feedback');