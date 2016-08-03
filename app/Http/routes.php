<?php

/*
   |--------------------------------------------------------------------------
   | Application Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register all of the routes for an application.
   | It's a breeze. Simply tell Laravel the URIs it should respond to
   | and give it the controller to call when that URI is requested.
   |
 */
Route::group(['middleware' => ['web']], function () {
    // admin
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('/admin/login','AdminAuthController@showLoginForm');
        Route::post('/admin/login','AdminAuthController@login');
        });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/admin', 'AdminHomeController@index');
        Route::get('/admin/home','AdminHomeController@index');
        });

    Route::get('/admin/logout','AdminAuthController@logout');

    // user
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
        return view('welcome');
        });
});
