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

Route::namespace('User')->prefix('member')->name('member.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        Route::get('/', 'MemberController@index')->name('top');
        Route::get('/information/{info_id}', 'InformationController@index')->name('information');

        Route::get('/class', 'ClassController@index')->name('class')->middleware('class');;

        Route::get('/user', 'UserController@index')->name('user');
        Route::get('/user/edit', 'UserController@edit')->name('edit');
        Route::post('/user/edit', 'UserController@update')->name('update');

    });
});

Route::prefix('main')->name('main.')->group(function () {
    Route::get('/', 'Main\MainController@index')->name('top');
    Route::get('/buy', 'Main\MainController@buy')->name('buy');
});


Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', 'Admin\AdminController@index');


    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', 'Admin\UsersController@index')->name('users');
    });

    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/', 'Admin\ClassController@index')->name('top');
    });

    Route::prefix('information')->name('information.')->group(function () {
        Route::get('/', 'Admin\InformationController@index')->name('top');
        Route::get('/create', 'Admin\InformationController@create')->name('create');
        Route::post('/store', 'Admin\InformationController@store')->name('store');
        Route::get('/edit/{info_id}', 'Admin\InformationController@edit')->name('edit');
        Route::post('/edit/', 'Admin\InformationController@update')->name('update');
        Route::post('/delete', 'Admin\InformationController@destroy')->name('delete');
    });

    Route::prefix('teachers_messages')->name('teachers_messages.')->group(function () {
        Route::get('/', 'Admin\TeachersMessagesController@index')->name('top');
        Route::get('/create', 'Admin\TeachersMessagesController@create')->name('create');
        Route::post('/store', 'Admin\TeachersMessagesController@store')->name('store');
        Route::get('/edit/{message_id}', 'Admin\TeachersMessagesController@edit')->name('edit');
        Route::post('/edit', 'Admin\TeachersMessagesController@update')->name('update');
        Route::post('/delete', 'Admin\TeachersMessagesController@destroy')->name('delete');
    });
});
