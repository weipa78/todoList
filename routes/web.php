<?php

use Illuminate\Support\Facades\Route;


//初期表示一覧画面
Route::get('/', 'App\Http\Controllers\MainController@index');

//新規登録入力画面
Route::get('/addInput', 'App\Http\Controllers\MainController@addInput');
//新規登録確認画面
Route::post('/addConfirm', 'App\Http\Controllers\MainController@addConfirm');
//新規登録実行
Route::post('/add', 'App\Http\Controllers\MainController@add');

//更新入力画面
Route::post('/changeInput', 'App\Http\Controllers\MainController@changeInput');
//更新確認画面
Route::post('/changeConfirm', 'App\Http\Controllers\MainController@changeConfirm');
//更新実行
Route::post('/change', 'App\Http\Controllers\MainController@change');

//削除確認画面
Route::post('/deleteConfirm', 'App\Http\Controllers\MainController@deleteConfirm');
//削除実行
Route::post('/delete', 'App\Http\Controllers\MainController@delete');