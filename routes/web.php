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

//index view
Route::get('mcaweb', 'mcawebcontroller@index');
//admin_panel_view
Route::get('addnews', 'PostController@index');
//News store
Route::post('/addnews', 'PostController@store')->name('post.add');
