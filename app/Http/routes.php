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

 Route::get('/admin/login', function() {
       $auth = Auth::guard('admin');
           $credentials = [
                   'email' => 'admin1@example.com',
                           'password' => 'password',
                               ];
                                
                                    return $auth->attempt($credentials) ? 'Admin Success' : 'Admin Failure';
 });
  
  Route::get('/user/login', function() {
        $auth = Auth::guard('user');
            $credentials = [
                    'email' => 'user1@test.com',
                            'password' => 'password',
                                ];
                                 
                                     return $auth->attempt($credentials) ? 'User Success' : 'User Failure';
  });

