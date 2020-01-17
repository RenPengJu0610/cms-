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
    Route::post('store','NewsController@store');
    Route::get('index','NewsController@index');
    Route::get('edit/{id}','NewsController@edit');
    Route::get('del/{id}','NewsController@destroy');
    Route::post('update/{id}','NewsController@update');
});
Route::prefix('news')->group(function(){
    Route::get('create','NewsController@create');
    Route::get('head','NewsController@head');
    Route::get('left','NewsController@left');
    Route::get('main','NewsController@main');
    Route::post('store','NewsController@store');
    Route::get('index','NewsController@index');
    Route::get('edit/{id}','NewsController@edit');
    Route::get('del/{id}','NewsController@destroy');
    Route::post('update/{id}','NewsController@update');
});

//管理员模块
Route::prefix('admin')->group(function () {
   Route::get('/','Admin\AdminController@index'); //列表
   Route::get('create','Admin\AdminController@create'); //添加
   Route::post('store','Admin\AdminController@store');  //执行添加
   Route::get('destroy/{id}','Admin\AdminController@destroy');  //执行删除
   Route::get('edit/{id}','Admin\AdminController@edit');  //编辑
   Route::post('update/{id}','Admin\AdminController@update');  //执行编辑
   Route::post('checkAccount','Admin\AdminController@checkAccount');  //验证账号唯一
});



