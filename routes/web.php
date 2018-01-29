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

Route::get('/','HomeController@index')->name('homepage');
Route::view('massive-tpl','layout.massive');
Route::get('/{slugUrl}','HomeController@detail')->name('post.detail');
Route::get(App\Category::CATE_URL.'{cateSlug}','HomeController@cate')->name('cate.detail');
