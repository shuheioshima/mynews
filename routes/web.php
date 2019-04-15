<?php
/*【ルーティング】　参照　https://wa3.i-3-i.info/word1498.html
ネットワーク上で行われる道案内。
→通信において「そっちの道を行けよ」と指示を出して目的地まで送る

【コントローラー】　参照 http://at-grandpa.hatenablog.jp/entry/2013/11/01/072636
Modelの加工メソッドを操作し、(Model内の)加工メソッドを変化させる
次にコントローラーがビューに命令を送る
ビューがモデルの状態を見て視覚(ユーザー)に表示(ディスプレイ)する。
→（結論）Modelの加工メソッドの操作＆Viewの操作をする人
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

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
  Route::get('news', 'Admin\NewsController@index')->middleware('auth');
  Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
  Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
});

/*->middleware('auth');はログインしていない時のリダイレクト処理
middlewareの参照サイト→https://readouble.com/laravel/5.3/ja/middleware.html
*/

  Route::group(['prefix' => 'admin'],function(){
  Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
  Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
  Route::get('news', 'Admin\NewsController@index')->middleware('auth'); // 追記
  Route::get('profile/edit','Admin\ProfileController@edit');
  Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','NewsController@index');
