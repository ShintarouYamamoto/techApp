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

Route::get('/', 'UserController@index');

Route::get('/buy', 'UserController@buy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/information', 'Admin\InformationController@index')->name('information');
    Route::get('/teachers_messages', 'Admin\TeachersMessagesController@index')->name('teachers_messages');
    Route::get('/users', 'Admin\UsersController@index')->name('users');
});

