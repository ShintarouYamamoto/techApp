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

Route::prefix('main')->name('main.')->group(function () {
    Route::get('/', 'MainController@index')->name('top');
    Route::get('/buy', 'MainController@buy')->name('buy');
});
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/', 'MemberController@index')->name('top');
    Route::get('/information/{info_id}', 'InformationController@index')->name('information');
});
Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/', 'Admin\AdminController@index');

    Route::prefix('information')->name('information.')->group(function () {
        Route::get('/', 'Admin\InformationController@index')->name('top');
        Route::get('/create', 'Admin\InformationController@create')->name('create');
    });


    Route::get('/information', 'Admin\InformationController@index')->name('information');
    Route::get('/teachers_messages', 'Admin\TeachersMessagesController@index')->name('teachers_messages');
    Route::get('/users', 'Admin\UsersController@index')->name('users');
});
