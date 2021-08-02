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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    // Eメール確認した会員のみアクセス可能
    return view('welcome');
})->middleware('verified');

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//メイン画面
Route::get('/top', 'ViewController@top')->name('top');
Route::get('/mypage', 'ViewController@mypage')->name('mypage');
Route::get('/uplode', 'ViewController@uplode')->name('uplode');

//ジャンル４種
Route::get('/rock', 'ViewController@rock')->name('rock');
Route::get('/pop', 'ViewController@pop')->name('pop');
Route::get('/punk', 'ViewController@punk')->name('punk');
Route::get('/jazz', 'ViewController@jazz')->name('jazz');






//ソングデータベース送信　音楽登録
Route::post('/uplode_post', 'PostsController@uplode_post')->name('uplode_post');



//詳細画面
//Route::get('/index/detail/{blog}', 'Controller@detail')->name('index/detail');



//テスト用
Route::get('/song', 'Controller@song')->name('song');
