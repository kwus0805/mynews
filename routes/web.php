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
Route::get('/',function(){
  return view('welcome');
  });

  //10.3課題
  Route::get('XXX','AAAController@bbb');
  //10.4課題
  Route::group(['prefix' => 'admin' , 'middleware' => 'auth'],function(){
   Route::get('profile/create','Admin\ProfileController@add');
   Route::get('profile/edit','Admin\ProfileController@edit');
   Route::get('news/create','Admin\NewsController@add');
   Route::post('news/create', 'Admin\NewsController@create'); # 追記
   Route::post('profile/create','Admin\ProfileController@create');#14課題３
   Route::post('profile/edit','Admin\ProfileController@update');#14課題６
  });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
