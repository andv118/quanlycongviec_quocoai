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
 // ------------------Authentication-----------------------------
Route::get('/','UserController@Login')->name('login')->middleware('checkLogout');
Route::post('login','UserController@getLogin')->name('getLogin');
Route::get('logout','UserController@Logout')->name('logout');

//-------------------Main-----------------------------------------
Route::group(['prefix'=>'/danh-muc','as'=>'admin.','middleware'=>['checkLogin']],function(){

	//-----------------------------Trang chủ------------------
	Route::get('trang-chu','HomeController@Home')->name('home');

	//-----------------------------Quản lý người dùng---------- 
	Route::get('/danh-sach-tai-khoan','HomeController@ManageUsers')->name('manage-users');
	Route::get('/them-moi-tai-khoan','HomeController@CreateUsers')->name('create-users');


















});