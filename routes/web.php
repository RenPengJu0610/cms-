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
// Route::get('hello',function(){
//     return 'Hello,welcome to LaraveLacademy.org';
// });
Route::prefix('news')->group(function(){
    Route::get('create','NewsController@create');
    Route::get('head','NewsController@head');
    Route::get('left','NewsController@left');
    Route::get('main','NewsController@main');
    Route::get('index','NewsController@index');
    Route::post('store','NewsController@store');
    Route::get('insert','NewsController@insert');
    Route::get('edit/{id}','NewsController@edit');
    Route::get('del/{id}','NewsController@destroy');
    Route::post('update/{id}','NewsController@update');
});
Route::prefix('newclass')->group(function(){
    Route::get('create','NewClassController@create');
    Route::post('store','NewClassController@store');
    Route::get('index','NewClassController@index');
    Route::get('edit/{id}','NewClassController@edit');
    Route::get('del/{id}','NewClassController@destroy');
    Route::post('update/{id}','NewClassController@update');
});

