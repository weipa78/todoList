<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//一覧・新規登録入力ページの検索
Route::get('/', 'App\Http\Controllers\MainController@index');

//一覧・新規登録入力ページの新規登録入力してトップページへリダイレクト
Route::get('/indata', 'App\Http\Controllers\MainController@create');

//更新入力ページへ遷移
Route::post('/updateForm', 'App\Http\Controllers\MainController@updateForm');

//更新確認ページへ遷移
Route::post('/updateConfirm', 'App\Http\Controllers\MainController@updateConfirm');

//更新してトップページへリダイレクト
Route::post('/update', 'App\Http\Controllers\MainController@update');

//削除確認ページへ遷移
Route::post('/deleteConfirm', 'App\Http\Controllers\MainController@deleteConfirm');

//削除してトップページへリダイレクト
Route::get('/delete', 'App\Http\Controllers\MainController@delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
