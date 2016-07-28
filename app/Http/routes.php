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

Route::get('/', function () {
    return view('welcome');
    });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/login',function(){

    //Guardを選択(admin)
    $auth = Auth::guard('admin');

    //認証
    if($auth->attempt(['email'=>'admin1@admin.com','password'=>'admin1']))
    {
    echo "You are Admin!";
    }else{
    echo "You are not Admin!";
    }

    return;

    });

Route::get('/user/login', function() {
    $auth = Auth::guard('users');
    $credentials = [
    'email' => 'test1@example.com',
    'password' => 'password',
    ];

    return $auth->attempt($credentials) ? 'User Success' : 'User Failure';
    });

