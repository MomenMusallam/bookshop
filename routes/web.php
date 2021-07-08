<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
//MainPage
Route::get('/','MainPageController@index');
Route::get('/view/book/{id}','MainPageController@show');
Route::get('/show/all/books/{type}/{id}','MainPageController@showspecificBooks');
Route::get('/contact','MainPageController@contact');
Route::get('/search/book','MainPageController@search');

//Admin Dashboard
Route::get('/admin', 'Admin\AdminController@index')->middleware('auth');

//book
Route::get('/admin/books','Book\BookController@index')->middleware('auth');
Route::get('/admin/book/add','Book\BookController@create')->middleware('auth');
Route::post('/admin/book/store','Book\BookController@store')->middleware('checkAddBook')->middleware('auth');
Route::get('/admin/book/edit/{id}','Book\BookController@edit')->middleware('auth');
Route::put('/admin/book/update/{id}','Book\BookController@update')->middleware('checkEditBook')->middleware('auth');
Route::get('/admin/book/delete/{id}','Book\BookController@destroy')->middleware('auth');

//Author
Route::get('/admin/authors','Author\AuthorController@index')->middleware('auth');
Route::get('/admin/author/add','Author\AuthorController@create')->middleware('auth');
Route::post('/admin/author/store','Author\AuthorController@store')->middleware('checkAddAuthor')->middleware('auth');
Route::get('/admin/author/edit/{id}','Author\AuthorController@edit')->middleware('auth');
Route::patch('/admin/author/update/{id}','Author\AuthorController@update')->middleware('checkEditAuthor')->middleware('auth');
Route::get('/admin/author/delete/{id}','Author\AuthorController@destroy')->middleware('auth');

//Publishing House
Route::get('/admin/publishinghouses','PublishingHouse\PublishingHouseController@index')->middleware('auth');
Route::get('/admin/publishinghouse/add','PublishingHouse\PublishingHouseController@create')->middleware('auth');
Route::post('/admin/publishinghouse/store','PublishingHouse\PublishingHouseController@store')->middleware('checkAddPublishingHouse')->middleware('auth');
Route::get('/admin/publishinghouse/edit/{id}','PublishingHouse\PublishingHouseController@edit')->middleware('auth');
Route::patch('/admin/publishinghouse/update/{id}','PublishingHouse\PublishingHouseController@update')->middleware('checkEditPublishingHouse')->middleware('auth');
Route::get('/admin/publishinghouse/delete/{id}','PublishingHouse\PublishingHouseController@destroy')->middleware('auth');

//Category
Route::get('/admin/categories','Category\CategoryController@index')->middleware('auth');
Route::get('/admin/category/add','Category\CategoryController@create')->middleware('auth');
Route::post('/admin/category/store','Category\CategoryController@store')->middleware('checkAddCategory')->middleware('auth');
Route::get('/admin/category/edit/{id}','Category\CategoryController@edit')->middleware('auth');
Route::patch('/admin/category/update/{id}','Category\CategoryController@update')->middleware('checkEditCategory')->middleware('auth');
Route::get('/admin/category/delete/{id}','Category\CategoryController@destroy')->middleware('auth');


Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('admin');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
