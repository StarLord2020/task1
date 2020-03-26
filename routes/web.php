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



Route::get('/callback', function () {
    return "callback";
});
Route::get('/view', function () {
    return view('task1');
});
Route::get('param/{number}', function ($number=0) {
    return 'Number: '.$number;
});
Route::get('user/{name?}', function ($name='User') {
    return 'Name: '.$name;
});
Route::get('/','ProductsController@index');
Route::get('/test','NewsController@show');
