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
Route::get('post/create','homecontroll@create');
Route::get('post/{id}/delete','homecontroll@delete');
Route::get('post/{id}/edit','homecontroll@edit');

Route::get('post/{id}', 'homecontroll@showpost');
		 
Route::get('post', 'homecontroll@index');





Route::get('/', 'homecontroll@store');

Route::delete('post/{id}', 'homecontroll@delete');
Route::put('post/{id}', 'homecontroll@update');
Route::post('/','homecontroll@save');
/*Route::get('/', function () {
    return View('test')
		->with('title','hello world')
		->with('hello','hello everyone');
	//return "hello";
});*/
