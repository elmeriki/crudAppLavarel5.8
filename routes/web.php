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

// Route::redirect('/welcome', '/user_profile');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/fetchAll', function () {
    return view('fetchAll');
});

Route::any('/getallstudent','FetchallController@getall');

Route::any('/insert','CreateController@insert');

Route::any('/deleteuser','DeleteController@delete');

Route::any('/updateuser','UpdateController@update');
