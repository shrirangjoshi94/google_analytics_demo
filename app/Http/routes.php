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

Route::get('/','CurlController@index');
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test1', function () {
    return view('page4');
});

Route::get('/test2', function () {
    return view('page5');
});

Route::get('/test3', function () {
    return view('page6');
});

Route::get('/test4', function () {
    return view('page7');
});

Route::get('/test5', function () {
    return view('page8');
});

Route::get('/test6', function () {
    return view('page9');
});

Route::get('/test7', function () {
    return view('page10');
});

Route::get('/test8', function () {
    return view('page11');
});


Route::auth();

Route::get('/home', 'HomeController@index');
