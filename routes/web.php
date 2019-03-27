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
Route::group(['prefix' => 'admin'],function(){
  Route::get('news/create','Admin\NewsController@add');
});
//自コメント)  Route::get('news/create','Admin/NewsController@add');に['prefix' => 'admin']という背定を適用させている。
/*
間違いコード
Route::get('admin/news/create','Admin\AAAController@bbb');
*/
Route::get('XXX','AAAController@bbb');
//書き方参照　https://qiita.com/michiomochi@github/items/de19c560bc1dc19d698c

Route::group(['prefix' => 'admin'], function(){
  Route::get('admin/profile/create','Admin\ProfileController@add');
  Route::get('admin/profile/edit','Admin\ProfileController@edit');
});
// /はディレクトリ階層
// \はnamespaceのこと。上記だとadmin配下のProfileControllerのeditのアクションに繋げるという意味。
