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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', 'LoginController@index');
Route::post('/main/checklogin', 'LoginController@checklogin');
Route::get('main/successlogin', 'LoginController@successlogin');
Route::get('main/logout', 'LoginController@logout');


