<?php

Route::match(['get', 'post'], '/', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/new', 'indexController@new')->name('new');

Route::get('/list-bock-house', 'HousesController@showHouses')->name('listBockHouse');

Route::get('/show-updated-home-status/{id}', 'HousesController@showUpdatedHomeStatus')->name('showUpdatedHomeStatus');

Route::get('/information-house', 'indexController@informationHouse')->name('information-house');

Route::get('/create', 'CreatePostsController@create')->name('post.create');


Route::post('/create', 'CreatePostsController@store')->name('post.store');

Route::post('/search', 'HousesController@search')->name('search');



Route::prefix('sign-in')->group(function () {

    Route::get('/', 'LoginController@signIn')->name('sign-in');

    Route::post('/dashboard', 'LoginController@login')->name('sign-store');

    Route::post('/updated-home-status', 'HousesController@updatedHomeStatus')->name('updatedHomeStatus');

    Route::post('/dashboard', 'LoginController@login')->name('dashboard');

    Route::get('/sign-up', 'LoginController@signUp')->name('sign-up');

    Route::post('/sign-up', 'LoginController@register')->name('sign-up');

});


Route::prefix('userBockHouse')->group(function () {

    Route::get('/edit-users/{id}', 'DashBoardController@editUserPostHouse')->name('editUsers');

    Route::post('/edit-userPostHouse/{id}', 'DashBoardController@updateUserPostHouse')->name('editUser');

    Route::get('/edit-users/{id}', 'DashBoardController@editUserBockHouse')->name('editUserBockHouses');

    Route::post('/edit-userBockHouse/{id}', 'DashBoardController@updateUserBockHouse')->name('editUserBockHouse');

    Route::get('/bockhoue', 'UserController@viewCanlendar')->name('viewCanlendar');

    Route::post('/bockhoue/{idHouses}/{idUser}', 'UserController@calendar')->name('bockhoue');

    Route::get('/forgot-passBockHouse/{id}', 'DashBoardController@forgotPasswordBockHouse')->name('forgot-passBockHouse');

    Route::post('forgot-passwordBockHouse/{id}', 'DashBoardController@forgotPassBockHouse')->name('forgot-password');

    Route::get('/calendar/{id}', "UserController@showCalendars")->name('showCalendars');

    Route::get('/delete-calender/{id}', "UserController@deleteCalender")->name('deleteCalendars');

});


Route::prefix('user')->group(function () {

    Route::get('/calendar/{id}', 'UserController@showCalendar')->name('showCalendar');

    Route::get('/dashboarduser', 'DashBoardController@dashBoardUser')->name('dashboardUser');

    Route::get('/editUsers/{id}', 'DashBoardController@editUserPostHouse')->name('editUsers');

    Route::post('/editUser/{id}', 'DashBoardController@updateUserPostHouse')->name('editUser');

    Route::get('/forgot-pass/{id}', 'DashBoardController@forgotPassword')->name('forgot-pass');

    Route::post('forgot-password/{id}', 'DashBoardController@forgotPass')->name('forgot-password');

    Route::post('post}', 'DashBoardController@post')->name('post');
});


Route::get('/create/{id}', 'CreatePostsController@create')->name('post.create');

Route::post('/create/{id}', 'CreatePostsController@store')->name('post.store');

Route::get('/new-post/{id}', 'CreatePostsController@showNewPost')->name('showNewPost');

Route::get('/seeDetails/{id}', 'HousesController@seeDetails')->name('seeDetails');

Route::get('/show-statistics/{id}', 'UserController@showStatistics')->name('showStatistics');

Route::post('/feedback/{id}', 'UserController@feedback')->name('feedback');



