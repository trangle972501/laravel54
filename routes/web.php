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
    return view('admin/page/admin');
});


Route::get('/detail_posts', function () {
    return view('posts/detail_posts');
});

Route::get('/tour', function () {
    return view('posts/list');
});

Route::get('/index', function () {
    return view('admin/layout/index');
});

Route::get('/list', function () {
    return view('admin/page/list');
});

/*--------------------------Admin-------------------------*/

/* =====================Posts=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'post'], function(){
		// admin/posts/add

		Route::get('list','PostsController@getAll');
		Route::get('edit','PostsController@getEdit');
		Route::get('add', 'PostsController@getAdd');
	});
});
/* =====================/Posts=============================*/

/* =====================Book Cars=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'bookcar'], function(){
		// admin/posts/add

		Route::get('list','BookCarsController@getAll');
	});
});
/* =====================/Book Cars=============================*/

/* =====================Car Brands=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'carbrand'], function(){
		// admin/posts/add

		Route::get('add','CarBrandsController@getAll');
	});
});
/* =====================/Car Brands=============================*/


/* =====================Cars=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'car'], function(){
		// admin/posts/add

		Route::get('add','CarsController@getAll');
	});
});
/* =====================/Cars=============================*/

/* =====================Order=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'order'], function(){
		// admin/posts/add

		Route::get('list','OrdersController@getAll');
	});
});
/* =====================/Order=============================*/

/* =====================Order=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'user'], function(){
		// admin/posts/add

		Route::get('list','UsersController@getAll');
	});
});
/* =====================/Order=============================*/

/* =====================Tour=============================*/
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=> 'tour'], function(){
		// admin/posts/add

		Route::get('add','ToursController@getAdd');
	});
});
/* =====================/Tour=============================*/

/*--------------------------Admin-------------------------*/