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
  Route::group(['prefix' => 'admin'],function(){
   Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
   Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
   Route::get('news/create','Admin\NewsController@add');
  });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ログインしていない時のリダイレクトの処理
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});
