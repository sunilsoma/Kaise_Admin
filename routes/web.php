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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/group/create', 'HomeController@create')->name('group_create');
Route::get('/group/detail/{groupId}', 'HomeController@detail')->name('group_detail');
Route::get('/group/edit', 'HomeController@edit')->name('group_edit');
